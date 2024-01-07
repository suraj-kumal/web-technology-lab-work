<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mydata";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate the 'id' parameter
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $stmt->close();
} else {
    echo "Invalid ID parameter";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" required>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
