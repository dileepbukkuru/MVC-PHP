<?php

class TaskModel
{
    private $filePath = 'tasks.json';

    public function getTasks()
    {
        if (file_exists($this->filePath)) {
            $data = file_get_contents($this->filePath);
            return json_decode($data, true);
        }
        return [];
    }

    public function addTask($taskName)
    {
        $tasks = $this->getTasks();
        $tasks[] = ['name' => $taskName, 'done' => false];
        file_put_contents($this->filePath, json_encode($tasks));
    }

    public function markTaskAsDone($taskId)
    {
        $tasks = $this->getTasks();
        if (isset($tasks[$taskId])) {
            $tasks[$taskId]['done'] = true;
            file_put_contents($this->filePath, json_encode($tasks));
        }
    }
}
