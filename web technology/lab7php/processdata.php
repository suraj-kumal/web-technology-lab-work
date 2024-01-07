<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mydata";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (name, address) VALUES ('$name', '$address')";
    $conn->query($sql);
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM users WHERE id=$id";
    $conn->query($sql);
}

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    $sql = "UPDATE users SET name='$name', address='$address' WHERE id=$id";
    $conn->query($sql);
}

$conn->close();
header("Location: index.php");
exit();
