<?php

class Employee{
    var $name;
    var $age;
    var $address;

    function full_name(){
        echo "name is : ".$this->name;
    }
}


$emp1=new Employee;
$emp2=new Employee;
$emp1->name="anuki";
$emp1->age=34;
$emp1->address="kottawa";



$emp1->name="sanduni";
$emp1->full_name();


?>