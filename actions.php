<?php
require_once 'db.php';

// Handle Actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'add') {
        $title = $conn->real_escape_string($_POST['title']);
        $description = $conn->real_escape_string($_POST['description']);

        $sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            exit;
        }
    }

    if ($action === 'delete') {
        $id = (int)$_POST['id'];
        $sql = "DELETE FROM tasks WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            exit;
        }
    }

    if ($action === 'toggle') {
        $id = (int)$_POST['id'];
        $sql = "UPDATE tasks SET status = IF(status='pending', 'completed', 'pending') WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            exit;
        }
    }
}
?>
