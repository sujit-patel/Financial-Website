<?php
// server and database connection code 
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "money";

$conn = new mysqli($serverName, $userName, $password, $dataBase);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$dbCreate = "CREATE DATABASE IF NOT EXISTS money";
if ($conn->query($dbCreate) === true) {
    echo "Database checked/created successfully";
} else {
    echo "Database creation failed: " . $conn->error;
}

// Select Database 
$conn->select_db($dataBase);
if ($conn->error) {
    die("Database selection failed: " . $conn->error);
} else {
    echo "<br>Connected to the database successfully";
}

// Create Table 
$table = "CREATE TABLE IF NOT EXISTS Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    FNAME VARCHAR(30) NOT NULL, 
    LNAME VARCHAR(30) NOT NULL, 
    NUMBER VARCHAR(15), 
    GENDER VARCHAR(10), 
    EMAIL VARCHAR(50), 
    PASSWORD VARCHAR(255), 
    profile_image VARCHAR(255)
)";
if ($conn->query($table) === TRUE) {
    echo "<br>Table Users created successfully\n";
} else {
    echo "<br>Error creating table: " . $conn->error . "\n";
}

// Data taken from user 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$num = $_POST['number'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pass = $_POST['password'];
// $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Handle image upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profile_image"]["name"]);

// Check if image file is a real image
$check = getimagesize($_FILES["profile_image"]["tmp_name"]);
if($check === false) {
    die("File is not an image.");
}

// Move uploaded file to target directory
if (!move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
    die("Sorry, there was an error uploading your file.");
}

// Insert data into database
$data = "INSERT INTO Users (FNAME, LNAME, NUMBER, GENDER, EMAIL, PASSWORD, profile_image) 
         VALUES ('$fname', '$lname', '$num', '$gender', '$email', '$pass', '$target_file')";

if ($conn->query($data) === TRUE) {
    echo "<br>Your data was inserted successfully...";
    header("location:login.html");
} else {
    echo "<br>Your data was not inserted: " . $conn->error;
}

// Close the connection
$conn->close();
?>
