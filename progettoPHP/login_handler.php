<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gelateria";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare SQL statement to fetch user details based on username
$sql = "SELECT * FROM utenti WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
echo $result->num_rows;
// Check if user exists
if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    // Verify password
    if (password_verify($password, $user['password'])) {
        // Password is correct, set session variables
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        // Redirect to homepage or another authenticated page
        header("Location: index.php");
        exit();
    } else {
        // Invalid password
        echo "Invalid username or password";
    }
} else {
    // User not found
    echo "Invalid username or password";
}

$stmt->close();
$conn->close();
?>