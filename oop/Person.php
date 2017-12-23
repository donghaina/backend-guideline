<?php

class Person
{
    private $name;
    private $age;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if ($age < 18) {
            echo 'not old enough';
        }
        $this->age = $age;
    }

}

$tao_sang = new Person('Tao sang');

$tao_sang->setAge(25);

var_dump($tao_sang->getAge());