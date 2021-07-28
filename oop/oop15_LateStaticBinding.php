<?php

class Product{
    public static $category="Gernaral category";

    public function display(){
        // echo self::$category;
        //normally we use "self" keyword to access static variables
        // but in late static binding we use "static" key word
        echo static::$category;

    }

    
}
class Computer extends Product{
    public static $category="computer category";
    // late static binding is needed for getting the function to access the static variable - watch 15th video

    
}

$x=new Computer;

$x->display();



?>