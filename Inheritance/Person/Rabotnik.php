<?php

namespace Rabotnik;





class Rabotnik extends Person {
    private $daySalary;

    private $overtimeMoney = 0;

    private $extraHours;

    public function __construct($name,$age,$isMale,$daySalary,$extraHours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
        $this->daySalary = $daySalary;
        $this->extraHours = $extraHours;
    }

    public function calculateOverTime ()
    {
        if ($this->age > 18) {
            $payPerHour = $this->daySalary / 8;
            $this->overtimeMoney = ($this->extraHours * $payPerHour) * 1.5;
            $this->daySalary += $this->overtimeMoney;
            echo "Yes";
        } else {
            $this->daySalary;
            echo "no";
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
        echo  "Name: $this->name->getName().'   '.Age: $this->age->getAge().'   '.Sex: $this->isMale->getIsMale().'  '.Day salary: $this->getDaySalary()";
    }

}