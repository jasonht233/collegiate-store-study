<?php

$x = 5; 
$y = 10;

function test(){
    global $x, $y;
    $y = $x + $y;
}

echo 'hello world233';  
echo $y;

$colors = array("red", "green", "blue","yello");
echo "<br>";
foreach($colors as $value){
    echo "$value <br>";
}


?>
