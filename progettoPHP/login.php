<?php include "header.php";?>

<!DOCTYPE html>
<html>

<body>
<div class="container">
<div class="contenuto">
    <h2>Login</h2>
    <form method="post" action="login_handler.php">
    <br>
    <br>
    <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    </div>
    </div>
</body>
</html>

<?php
if (isset($_SESSION["id"])) {
    header("Location: index.php");
    //importante, non vogliamo in questo caso dell'if che venga eseguito anche il codice sotto
    die();
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // includo login_handler, dove viene fatto il check delle credenziali
    include_once("login_handler.php");
}

?>