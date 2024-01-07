<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        a {
            margin-left: 10px;
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        .user-item {
        background-color: #fff;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 4px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .user-info {
        flex-grow: 1;
    }

    .user-actions {
        display: flex;
        gap: 10px;
    }

    .delete-link {
        color: #e74c3c;
    }

    .edit-link {
        color: #3498db;
    }
    </style>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="processdata.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <h2>User List</h2>
    <ul>
    <li class='user-item'>
            <div class='user-info'>
                <span>NAME - ADDRESS</span>
            </div>
        <?php include('display.php')?>
    </ul>
</body>
</html>
