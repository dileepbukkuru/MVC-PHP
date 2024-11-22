<?php
require_once 'Controllers/TaskController.php';

$controller = new TaskController();

// Route handling
$action = $_GET['action'] ?? 'list'; // Default action is 'list'

if ($action === 'list') {
    $controller->listTasks();
} elseif ($action === 'add') {
    $controller->addTask();
} elseif ($action === 'done') {
    $controller->markAsDone();
} else {
    echo "Invalid action!";
}
