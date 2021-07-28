<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "<h1>hello</h1>";
$name=$_POST["name"];
$grade=$_POST["grade"];
$section=$_POST["section"];
$teacherName=$_POST["teacherName"];

echo ' - ' .$name. ' - ' .$grade. ' - ' .$section. ' - ' .$teacherName;

define("pi",3.14156);

$max= (5>10)? "<br>hello 5<br><br>":"<br>tteee 10<br><br> ";
echo $max;

echo pi;



$a=array(array("a","b","c"),
        array("t","v","d"),
        array("n","xxx","b"));
         
foreach($a as $aval){
    foreach ($aval as $o){
        echo $o ."<br>";

    }
}


$d="    helo guys   ";
echo " <br> ".strlen(trim($d));
echo " <br> ".strlen(ltrim($d))." : ".ltrim($d);
echo " <br> ".strlen(rtrim($d))." : ".rtrim($d);





?>
</body>
</html>