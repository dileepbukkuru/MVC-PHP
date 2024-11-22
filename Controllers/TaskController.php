<?php
require_once 'Models/TaskModel.php';

class TaskController
{
    private $model;

    public function __construct()
    {
        $this->model = new TaskModel();
    }

    public function listTasks()
    {
        $tasks = $this->model->getTasks();
        require 'Views/layout.php';
        require 'Views/task-list.php';
    }

    public function addTask()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $taskName = $_POST['task_name'] ?? '';
            if (!empty($taskName)) {
                $this->model->addTask($taskName);
                header('Location: index.php?action=list');
                exit;
            }
        }
        require 'Views/layout.php';
        require 'Views/add-task.php';
    }

    public function markAsDone()
    {
        $taskId = $_GET['id'] ?? null;
        if ($taskId !== null) {
            $this->model->markTaskAsDone($taskId);
        }
        header('Location: index.php?action=list');
        exit;
    }
}
