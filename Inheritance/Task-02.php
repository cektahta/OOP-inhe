<?php

use Person\Person;
use Person\Student;
use Person\Rabotnik;

require_once 'autoload.php';

$rabotni1 = new Rabotnik('Ivan',15,true,100,2);
echo $rabotni1->rabotnikShowInfo();
