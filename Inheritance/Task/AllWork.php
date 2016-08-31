<?php

namespace Task;
use Task\Task;
class AllWork extends Task
{
    protected $tasks = [];
    protected $freePlacesForTask = 0;
    protected $currentUnnasignedTask = 0;

    public function __construct()
    {
        $this->freePlacesForTask = 10;
        $this->currentUnnasignedTask = 0;
    }

    public function getTasks () {
        return $this->tasks;
    }

    public function getFreePlacesForTask() {
        return $this->freePlacesForTask;
    }

    public function getCurrentUnnasignedTasks () {
        return $this->currentUnnasignedTask;
    }



    public function allWork()
    {

    }

    public function addTask(Task $task)
    {
        if ($this->freePlacesForTask > 0) {
            $this->$tasks[] = $task;
            echo $task->getName();
        }

    }
    public function getNextTask()
    {

    }
    public function isAllWorkDone() {

    }
}