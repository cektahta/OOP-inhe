<?php
require_once 'autoload.php';
use Task\Task;
use Employee\Employee;
use AllWork\AllWork;
$vork = new Task('kopane',8);


$employee = new Employee('Ivan');
$employee->setCurrentTask($vork);
$employee->setHoursRemaining(2);
$employee->work();
$allWork = new AllWork();
echo $allWork->getTasks();

echo $employee->showReport();




