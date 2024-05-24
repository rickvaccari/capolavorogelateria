<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<?php
$prodotto = $_GET['prodotto'];
$query = "SELECT * FROM gusti where g_tipo='$prodotto';";
$result = $Dbconn->query($query);

?>

<body>
    <div class="container">
        <div class="contenuto">
            <div class="grid">

                <?php while ($row = $result->fetch_assoc()) {
                    $titolo = $row['g_titolo'];
                    $nomegusto = $row['g_nome'];
                    $prezzo = $row['g_prezzo'];
                    $moneta = $row['g_moneta'];
                    $imagePath = $row['g_image'];
                    ?>
                     <div class="col-33.33">
                        <?php
                        echo '<a href="ingredienti.php?gusto=' . $nomegusto . '" >';
                        echo '<img src="' . $imagePath . '" alt="' . $nomegusto . '" title="' . $nomegusto . '"height="150"> </a>'; ?>
                        <div class="product-container">

                            <?php
                            echo '<a href="ingredienti.php?gusto=' . $nomegusto . '" >';
                            echo "<h6>$titolo</h6> </a>";
                            echo "<p><span id='price'>$prezzo </span>  $moneta</p>";
                            ?>
                            <form action="cart.php" method="post">
                                <input type="hidden" name="product" value=<?php echo $nomegusto; ?>>
                                <input type="hidden" name="qta" value=1>
                                <input type="hidden" name="price" value=<?php echo $prezzo; ?>>
                                <button type="submit" class="round-button-cart" name="add">+</button>
                            </form>
                        </div>
                </div>
                <?php
                }
                $Dbconn->close(); ?>
        </div>
    </div><!-- fine contenuto -->

    </div><!-- fine conteitore -->
</body>
<?php include 'footer.php'; ?>

</html>