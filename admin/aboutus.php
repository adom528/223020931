<?php
session_start();
include('db.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // password hashing

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);
    $admin = $stmt->fetch();

    if ($admin) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['role'] = $admin['role'];
        header("Location: admin_dashboard.php"); // Redirect to admin dashboard
    } else {
        echo "Invalid login credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>

