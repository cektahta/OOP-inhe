<?php
namespace Student;

class Student extends Person
{
    protected $score;

    public function __construct($name,$age,$isMale,$score)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
        $this->price = $score;
    }


    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function showStudentInfo () {
        echo "Name: $this->name->getName().'   '.Age: $this->age->getAge().'   '.Sex: $this->isMale->getIsMale().'  '.Score: $this->getScore()";
    }


}