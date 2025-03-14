<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        form label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }
        form input[type="text"],
        form input[type="number"],
        form input[type="email"],
        form input[type="checkbox"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }
        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="add.php" method="post">
        <h2>Add Student</h2>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="120" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="active">
            <input type="checkbox" id="active" name="active" value="1" checked>
            Active
        </label>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>
