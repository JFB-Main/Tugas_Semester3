<?php
session_start();

// Initialize the error variable to avoid undefined variable warnings
$error = "";

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    $role = $_SESSION['role']; // Get the role from the session if logged in

    if ($role == 'user') {
        header("Location: user.php");
        exit;
    } elseif ($role == 'admin') {
        header("Location: admin.php");
        exit;
    } elseif ($role == 'superadmin') {
        header("Location: superadmin.php");
        exit;
    } else {
        // Redirect to error page if an unexpected role is received
        header("Location: error.php");
        exit;
    }
}

// Check if form data is received via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted data from the form
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;
    $role = $_POST['role'] ?? null;

    // Simple login check for username & password javier
    if ($username == 'javier' && $password == 'javier') {
        // Set session variables on successful login
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        // Redirect based on the role
        if ($role == 'user') {
            header("Location: user.php");
            exit;
        } elseif ($role == 'admin') {
            header("Location: admin.php");
            exit;
        } elseif ($role == 'superadmin') {
            header("Location: superadmin.php");
            exit;
        } else {
            // Redirect to error page if an unexpected role is received
            header("Location: error.php");
            exit;
        }
    } else {
        // Set an error message if the login fails
        $error = "Login Gagal";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
    <?php if($error != ""){ ?>
    <h2><?= $error ?></h2>
    <?php } ?>
    <form action="/formpost/formpost.php" method="POST">
        <label for="name">Username:</label>
        <input type="text" id="name" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="Role">Role:</label>
        <select name="role" id="Role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="superadmin">Superadmin</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>