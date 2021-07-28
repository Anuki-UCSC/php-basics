<?php

class Employee{
    public $name="anu";
    protected $age="14";
    private $address="2121saas";

    protected function fun(){
        echo "<br>".$this->name;
        echo "<br>".$this->age;
        echo $this->address;
    }
}

class TraineeEmployee extends Employee{
    public function call_fun(){
        $this->fun();
    }
    
}


$kamala=new TraineeEmployee;

$kamala->call_fun();


?>