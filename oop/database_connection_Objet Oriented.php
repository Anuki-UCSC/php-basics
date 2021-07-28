<?php

$server="localhost";
$username="root";
$password="";
$database="phptest";

$connection=new mysqli($server,$username,$password,$database);

if($connection->connect_error){
    die("connection error");
}else{
    echo "connection ok";
} 


$sqlinsert = "INSERT into product ( id,name,category,price) values('','dell A5','laptop',160000)";
$sqlselect= "SELECT id,name,category,price FROM product";
$result = $connection->query($sqlinsert);

if($result){
    echo "query successful";
}else{
    echo "query failed"
}





// num_rows()
// mysqli_fetch_assoc()
// escape_string()
// affected_rows()
// 

?>