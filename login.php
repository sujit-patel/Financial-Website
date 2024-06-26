<?php

session_start();
// server and database connection code 

$servername = "localhost";
$username = "root";
$passworde = "";
$database = "wp project";

$conn = new mysqli($servername, $username, $passworde, $database);

if ($conn->connect_error) {
    echo "Your Server and Database is not connected..." . $conn->connect_error;
} else {
    echo "Your server and database are connected...";
}

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT email, password from signup where email = '$email' and password = '$pass'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo"ok good";
    $_SESSION['email'] = $email;
    header("Location: index.php");
    exit();
}else{
    echo"Login Failed";
}
$conn->close();

?>