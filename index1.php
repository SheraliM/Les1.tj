<?php 


$a = 1; // int

$b = "Sherali"; // string 

$c = true; // boolean

$f = 1.1;

$arr = [];

$ob = new stdClass();



for ($i = 0; $i < 100; $i+=2){
    $arr[] = $i * 2;
}

$cnt = 0; 
foreach ($arr as $key => $value) {
    
   if ($key%2 == 0) echo "key[ " .$key . " ]" . " => [". $value . "]<br>"; 
    if ($key == 10) break;
}
$k = 0;


$a = 10;
$b = 20;
switch($a >= $b) {
    case true : echo "True";break;
    case False: echo "False";break;
}


$name = "Sherali";
$sername = "Mirzoavliyoev";
echo "<br/>";
echo $name . " " . $sername;


$fullname = "$name $sername";

echo "<br/>";

echo $fullname;


$ob = new stdClass ();


$ob -> name = "Sherali";
$ob -> sername = "Mirzoavliyoev";
echo "<br/>";
var_dump($ob);

