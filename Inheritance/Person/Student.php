<?php
namespace Person;

class Student extends Person
{
    protected $score;

    public function __construct($name,$age,$isMale,$score)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
        if ($score < 2 || $score > 6) {
            echo "bad score input";
        } else {
            $this->score = $score;
        }

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
        echo "Name: $this->name  Age: $this->age  Sex: $this->isMale  Score: $this->score";
    }


}