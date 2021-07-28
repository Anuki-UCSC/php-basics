<?php

class Employee{
    var $name;
    var $age;
    var $address;

    function display(){
        echo "<br><br>name is : ".$this->name;
        echo "<br>age is : ".$this->age;
        echo "<br>address is : ".$this->address;
    }
}


class TraineeEmployee extends Employee{
    var $trainPeriod;
    var $startDate;

    function display(){
        echo "<br><br>name is : ".$this->name;
        echo "<br>age is : ".$this->age;
        echo "<br>address is : ".$this->address;
        echo "<br>trainPeriod is : ".$this->trainPeriod;
        echo "<br>startDate is : ".$this->startDate;
    }
}


$emp1=new Employee;
$t_emp2=new TraineeEmployee;

$emp1->name="pawani";
$emp1->age=5;
$emp1->address="Mathara";

$t_emp2->name="Demini";
$t_emp2->age=5;
$t_emp2->address="Homagama";
$t_emp2->trainPeriod="1 year";
$t_emp2->startDate="sept 1";

$t_emp2->display();
$emp1->display();



?>