<?php
session_start();

// Database connection
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "money";

$conn = new mysqli($serverName, $userName, $password, $dataBase);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "ok";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $upassword = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE EMAIL = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if
         ($upassword == $row['PASSWORD']) {
            // $_SESSION['user_id'] = $row['id'];
            $_SESSION['fname'] = $row['FNAME'];
            $_SESSION['profile_image'] = $row['profile_image'];
            echo "ok";
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
}

$conn->close();
?>
