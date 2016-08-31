<?php

use Person\Person;
use Person\Student;
use Person\Rabotnik;

require_once 'autoload.php';

$rabotnik1 = new Rabotnik('Ivan',15,true,100);
$rabotnik2 = new Rabotnik('Petar',25,true,150);

$rabotnik1->calculateOverTime(5);
$rabotnik2->calculateOverTime(3);

$person1 = new Person('Hasan',12,true);
$person2 = new Person('Aishe',10,false);

$student1 = new Student('Naiden',14,true,4);
$student2 = new Student('Gica',17,false,3);

$array = [$rabotnik1,$rabotnik2,$person1,$person2,$student1,$student2];

for($i = 0; $i < count($array);$i++) {

    if ($array[$i] instanceof Person) {
        echo  $array[$i]->showPersonInfo().PHP_EOL;
    }
    if ($array[$i] instanceof Student) {
        echo $array[$i]->showStudentInfo().PHP_EOL;
    }
    if ($array[$i] instanceof  Rabotnik) {
        echo $array[$i]->rabotnikShowInfo().PHP_EOL;
    }

}




