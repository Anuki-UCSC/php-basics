<?php

class Employee{
    public static $count=1;

    public function display(){
        echo "<br> inside function".self::$count++;
    }
}

class T_employee extends Employee{

}

echo "<br>right after access modifier";
echo "<br>use 'self' + '::' ------ to modify or access inside a class ";
echo "<br>use class_name + '::' ------ to modify or access ";
Employee::$count=3;

echo "<br>".Employee::$count;

$emma=new Employee;
$emma->display();
echo "<br>".Employee::$count;

echo "<br>watch 13 video - find how the globlly changing static in child classes";




?>