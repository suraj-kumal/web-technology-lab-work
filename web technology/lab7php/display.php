<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mydata";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<li class='user-item'>
            <div class='user-info'>
                <span>{$row['name']} - {$row['address']}</span>
            </div>
            <div class='user-actions'>
                <a href='processdata.php?delete={$row['id']}' class='delete-link'>Delete</a>
                <a href='edit.php?id={$row['id']}' class='edit-link'>Edit</a>
            </div>
          </li>";
}

$conn->close();
?>
