<!DOCTYPE html>
<html lang="it">

<?php
include 'header.php';
// Inizializza il carrello se non esiste
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
// Remove product from cart
if (isset($_POST['remove'])) {
    echo $_POST['remove'];
    if (isset($_POST['index']) && is_numeric($_POST['index'])) {
        $index = (int)$_POST['index'];
        if (isset($_SESSION['cart'][$index])) {
            array_splice($_SESSION['cart'], $index, 1);
        }
    }
    // Redirect per evitare il reinvio del modulo al refresh
    header("Location: cart.php");
    exit();
}


// Remove product from cart
if (isset($_POST['removeall'])) {
    $_SESSION['cart'] = [];
    // Redirect per evitare il reinvio del modulo al refresh
    header("Location: cart.php");
    exit();
}
// Aggiungi il prodotto al carrello
if ((isset($_POST['add'])) && isset($_POST['product']) && isset($_POST['price'])&& isset($_POST['qta'])) {

    $product = $_POST['product'];
    $price = (float)$_POST['price'];
    $qta=(float)$_POST['qta'];
    $_SESSION['cart'][] = [
        'product' => $product,
        'price' => $price,
        'qta'=> $qta
    ];
    // Redirect per evitare il reinvio del modulo al refresh
    header("Location: cart.php");
    exit();
}

// Calcola il totale
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'];
}

// Aggiungi il prodotto al carrello
if ((isset($_POST['paga'])) && $total>0 ) {
    if (!isset($_SESSION["id"])) {
        header("Location: signup.php");
        exit();
    }
    $data = date('Y-m-d H:i:s');
    $utente = $_SESSION["id"];
    foreach ($_SESSION['cart'] as $item) {
        $qta = $item['qta'];
        $prodotto = $item['product'];
       
        // Query per inserire i dati nel database
        $sql = "INSERT INTO `ordini` (`o_data`, `o_idutente`, `o_tot`, `o_quant`, `o_descrizione`)
        VALUES ('$data',  '$utente', '$total', '$qta', '$prodotto')";
    
        if ($Dbconn->query($sql) === TRUE) {
            echo "Registrazione avvenuta con successo!";
        } else {
            echo "Errore durante la registrazione: " . $Dbconn->error;
        }
    }
    // Redirect per evitare il reinvio del modulo al refresh
   header("Location: index.php");
    exit();
}

?>



<body>
    <div class="container">
        <div class="contenuto">
            <div class="cart-container">
                <h1>Carrello</h1>
                <table>
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 20%;">
                        <col style="width: 20%;">
                        <col style="width: 10%;">
                    </colgroup>

                    <tbody>
                        <?php foreach ($_SESSION['cart'] as $index => $item) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($item['product']); ?></td>
                                <td><?php echo number_format($item['qta'],0); ?> </td>
                                <td><?php echo number_format($item['price'], 2); ?> €</td>
                                <td>
                                    <form action="cart.php" method="post" style="display:inline;">
                                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                                        <button type="submit" class="round-button-cart" name="remove">-</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <h1><strong>Totale: <?php echo number_format($total, 2); ?> €</strong></h1>
                <form action="index.php" method="get">
                    <button type="submit" class="round-acquisti" >Continua a fare acquisti</button>
                </form>
                <form method="POST" action="cart.php">
                    <button type="submit" class="round-button-cart" name="removeall">x</button>
                </form>
                <form action="cart.php" method="post">
                    <button type="submit" class="round-acquisti" name="paga">Paga</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>

</html>