<?php
require_once 'models/Task.php';

class TaskController {
    private $tasks = array();

    public function __construct() {
        if (isset($_POST['addTask'])) {
            $taskDescription = $_POST['task'];
            $task = new Task($taskDescription);
            array_push($this->tasks, $task);
        }

        if (isset($_POST['deleteTask'])) {
            $taskIndex = $_POST['index'];
            array_splice($this->tasks, $taskIndex, 1);
        }

        if (isset($_POST['completeTask'])) {
            $taskIndex = $_POST['index'];
            $this->tasks[$taskIndex]->markAsDone();
        }
    }

    public function render() {
        $tasks = $this->tasks;
        require 'views/taskList.php';
    }
}

