<?php

class Employee{
    private $salary=40000;

    public function getSalary(){
        return $this->salary; 
    }

    public function setSalary($salary){
        return $this->salary=$salary; 
    }
}

$vimala=new Employee;
$vimala->setSalary(70000);

echo $vimala->getSalary();

?>