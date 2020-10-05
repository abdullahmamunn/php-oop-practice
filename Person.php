<?php


class Person
{
    public $name    = "Abdullah";
    public $address = "Bajitpur";
    protected $phoneNUmber = "01759457406";
    private $totalAsset = "10 taka";
    public $value = "mamun";

    public function __construct()
    {
        echo $this->value;
    }

    public function schoolEduacation()
    {
        echo "Aftab uddin school and college"."<br>";
        echo $this->name."<br>";
        echo $this->address."<br>";
        echo $this->phoneNUmber."<br>";
        echo $this->totalAsset;
        echo "<br>"."Now access protected method";
        echo "<br>";
        echo $this->collegeEduaction();

        echo "<br>"."Now access private method";
        echo "<br>";
        echo $this->universityEduacation();
    }

    protected function collegeEduaction()
    {
        echo "Gurudayal College"."<br>";
        echo $this->value;
    }

    private function universityEduacation()
    {
        echo "BUBT";
    }

 }