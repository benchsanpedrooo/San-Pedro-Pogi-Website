<?php
session_start();

// Include your database connection file
include_once('database.php');

// Check if the user is already logged in, redirect to index.php if true
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit(); // Make sure to exit after redirection
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a function to validate the user login credentials in your database
    if (validateUser($_POST['email'], $_POST['password'])) {
        // Set session variables or any other logic you want to handle for successful login
        $_SESSION['username'] = $_POST['email'];

        // Redirect the user to index.php
        header("Location: index.php");
        exit(); // Make sure to exit after redirection
    } else {
        // If login fails, set an error message
        $_SESSION['message'] = "Invalid email or password";
        $_SESSION['success'] = "danger";
        // Redirect back to the login page
        header("Location: login.php");
        exit(); // Make sure to exit after redirection
    }
}

// Function to validate user login credentials
function validateUser($email, $password) {
    // Implement your logic here to validate the user login credentials
    // Check if the email and password match a record in your database
    // You can use prepared statements to prevent SQL injection
    global $conn;
    $sql = "SELECT * FROM client WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Verify the hashed password
        if (password_verify($password, $user['password'])) {
            // Password is correct
            return true;
        }
    }
    return false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #1b1b1b;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="card p-3">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success <?= $_SESSION['success'] == 'danger' ? 'bg-danger text-light' : null ?>" role="alert">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif ?>

    <div class="card-body">
        <h2 class="card-title ">Login</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group mt-3">
                <button type="submit">Login</button>
            </div>
        </form>
        <p class="text-primary mt-3">Don't have an account?&nbsp;<a href="registration.php">Register here</a></p>
        <p class="text-primary">Go back to&nbsp;<a href="index.php">homepage</a></p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
