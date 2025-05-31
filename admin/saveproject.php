<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit();
}

$content = $_POST['content'];
file_put_contents('projects.json', json_encode(['projects' => $content], JSON_PRETTY_PRINT));
header('Location: admindashboard.php');
