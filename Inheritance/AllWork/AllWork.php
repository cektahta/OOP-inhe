<?php

namespace AllWork;
use Task\Task;
class AllWork extends Task
{
    protected $tasks = [];
    protected $freePlacesForTask = 0;
    protected $currentUnnasignedTask = 0;

    public function __construct()
    {
        self::$tasks[] = parent::__construct(name,hoursleft);
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

    public function addTask()
    {

    }
    public function getNextTask()
    {

    }
    public function isAllWorkDone() {

    }
}