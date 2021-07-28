<?php

class Employee{

}

echo "<pre>  ";
print_r(get_declared_classes());
echo "<pre>  ";

if(class_exists("Employee")){
    echo "have class";
}else{
    echo "NOT haveing class";
}



?>