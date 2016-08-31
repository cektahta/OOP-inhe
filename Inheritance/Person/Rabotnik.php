<?php

namespace Person;





class Rabotnik extends Person {
    private $daySalary;

    private $overtimeMoney = 0;



    public function __construct($name,$age,$isMale,$daySalary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
        $this->daySalary = $daySalary;

    }

    public function calculateOverTime ($extraHours)
    {
        if ($this->age > 18) {
            $payPerHour = $this->daySalary / 8;
            $this->overtimeMoney = ($extraHours * $payPerHour) * 1.5;
            $this->daySalary += $this->overtimeMoney;

        } else {
            $this->getDaySalary();

        }

    }

    public function getDaySalary()
    {
        return $this->daySalary ;
    }

    public function getOvertimeMoney()
    {
        return $this->overtimeMoney;
    }

    public function setDaySalary($daySalary)
    {
        $this->daySalary = $daySalary;
    }

    public function setOvertimeMoney($overtimeMoney)
    {
        $this->overtimeMoney = $overtimeMoney;
    }

    public function getExtraHours()
    {
        return $this->extraHours;
    }

    public function setExtraHours($extraHours)
    {
        $this->extraHours = $extraHours;
    }



    public function rabotnikShowInfo() {
        echo  "Name: $this->name Age: $this->age Sex: $this->isMale Day salary: $this->daySalary";
    }

}