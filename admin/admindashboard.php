<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit();
}

$data = json_decode(file_get_contents('projects.json'), true);
?>
<form method="POST" action="save_project.php">
    <textarea name="content"><?php echo htmlspecialchars($data['projects'] ?? ''); ?></textarea>
    <button type="submit">Save</button>
</form>
<a href="logout.php">Logout</a>
