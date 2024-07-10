<?php
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_name = $_POST['task_name'];
    
    $stmt = $pdo->prepare("INSERT INTO tasks (task_name) VALUES (:task_name)");
    $stmt->execute(['task_name' => $task_name]);
    
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
</head>
<body>
    <h1>Add New Task</h1>
    <form method="POST">
        <label for="task_name">Task Name:</label>
        <input type="text" id="task_name" name="task_name" required>
        <button type="submit">Add Task</button>
    </form>
    <a href="index.php">Back to Task List</a>
</body>
</html>