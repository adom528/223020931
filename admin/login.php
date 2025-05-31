<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['logged_in'] = true;
        header('Location: admindashboard.php');
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>
<form method="POST">
    <input name="username" placeholder="Username" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit">Login</button>
    <?php if (!empty($error)) echo "<p>$error</p>"; ?>
</form>

