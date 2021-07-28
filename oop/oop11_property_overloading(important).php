<?php

class Employee{
    private $salary=40000;

    protected function fun(){
        echo "<br>".$this->salary; 
    }
}

class TraineeEmployee extends Employee{
    // salary in employee is overidden and do not give any error because they do not know salary is in the parent ,(it is protected)
    var $salary=16700; 
    public function call_fun(){
        $this->fun();
    }
    
}


$kamala=new TraineeEmployee;

$kamala->call_fun();
echo "<br>overriden : ".$kamala->salary;


?>