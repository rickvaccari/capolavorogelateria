<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>

<body>
    <div class="container">

        <div class="contenuto">
            <h2>Client Signup</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome"><br>
                <label for="cognome">Cognome:</label><br>
                <input type="text" id="cognome" name="cognome"><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="indirizzo">Indirizzo:</label><br>
                <input type="text" id="indirizzo" name="indirizzo"><br>
                <label for="cf">Codice Fiscale (CF):</label><br>
                <input type="text" id="cf" name="cf"><br>
                <input type="submit" value="Registrati">
            </form>
        </div>
    </div>


</body>

</html>

<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gelateria";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Verifica se i dati di registrazione sono stati inviati
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $password = $_POST['password'];
    $utenti = $_POST['username'];
    $email = $_POST['email'];
    $indirizzo = $_POST['indirizzo'];
    $cf = $_POST['cf'];
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Query per inserire i dati nel database
    $sql = "INSERT INTO `utenti` (`nome`, `cognome`, `username`, `password`, `email`, `indirizzo`, `CF`)
	VALUES ('$nome', '$cognome', '$utenti', '$hashed_password', '$email', '$indirizzo', '$cf')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrazione avvenuta con successo!";
    } else {
        echo "Errore durante la registrazione: " . $conn->error;
    }
}

$conn->close();
?>