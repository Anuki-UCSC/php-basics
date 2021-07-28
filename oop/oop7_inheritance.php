<?php

class Employee{
    var $name;
    var $age;
    var $address;

    function full_name(){
        echo "name is : ".$this->name;
    }
}


class TraineeEmployee extends Employee{

}


$emp1=new Employee;
$t_emp2=new TraineeEmployee;

$t_emp2->name="Demini";
$t_emp2->age=5;
$t_emp2->address="Homagama";

$t_emp2->full_name();

$vars=get_object_vars($t_emp2);

echo "<pre>";
print_r($vars);
echo "<pre>";


print_r( get_parent_class($t_emp2));
if(is_subclass_of("TraineeEmployee","Employee")){
    echo "<br><br>yes";
};


?>