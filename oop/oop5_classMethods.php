<?php

class Employee{
    var $name;
    var $age;
    var $address;

}


$emp1=new Employee;
$emp2=new Employee;
$emp1->name="anuki";
$emp1->age=34;
$emp1->address="kottawa";



echo "<pre>  ";
print_r(get_class_methods("Employee"));
echo "<pre>  ";

echo "<pre>  ";
print_r(get_class_methods($emp1));
echo "<pre>  ";





if(property_exists("Employee","name")){
    echo "exists";
}else{
    echo "NOT exists";
}



?>