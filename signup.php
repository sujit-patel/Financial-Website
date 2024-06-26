<?php
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


// data tack from user 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$num = $_POST['number'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pass = $_POST['password'];


$data = "INSERT into wp_signup (FNAME,LNAME,NUMBER,GENDER,EMAIL,PASSWORD) VALUES ('$fname','$lname','$num','$gender', '$email', '$pass')";

if ($conn->query($data) == true) {
    echo "<br> Your Data Inser Successfull...";
    header("location:login.html");
}else{
    echo "<br> Your Data Not Inser " . $conn->error;
}


?>