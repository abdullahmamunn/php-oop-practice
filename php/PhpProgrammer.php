<?php


class PhpProgrammer
{
     public $name;
    protected $age;
    private $salary;


    public function showName()
    {
        echo "My name is ".$this->name;
    }

    protected function showAge()
    {
        echo "age is ".$this->age;
    }

    private function showSalary()
    {
        echo "Salary is ".$this->salary;
    }

    public function showPrivateProperty()
    {
        $this->salary="20k";
        $this->showSalary();
    }
}