<?php

class Employee{
    public $salery=1000;

    public function calc(){
        echo "calculate salery";
    }

    
}
class TraineeEmployee extends Employee{
    public function calcForTrainee(){
        echo "reductions<br>";
        parent::calc();
        // using parent keyword to call patent function inside a child
    }
}

$t_emp1=new TraineeEmployee;

$t_emp1->calcForTrainee();



?>