<?php

namespace Person;
class Person
{
    protected  $name;
    protected $age;
    protected $isMale;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getIsMale()
    {
        return $this->isMale;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setIsMale($isMale)
    {
        $this->isMale = $isMale;
    }

    public function showPersonInfo () {
        echo "Name: $this->getName().'   '.Age: $this->getAge().'   '.Sex: $this->getIsMale()";
    }
}