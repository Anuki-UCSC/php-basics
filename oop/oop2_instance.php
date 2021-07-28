<?php

class Employee{
    var $name;
    var $age;
    var $address;
}


$emp1=new Employee;
$emp1->name="anuki";
$emp1->age=34;
$emp1->address="kottawa";




echo "<pre>  ";
print_r(get_declared_classes());
echo "<pre>  ";


if(is_a($emp1,"Employee")){
    echo "yes";
}else{
    echo "NO";
}



?>