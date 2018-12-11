<?php


class name{
    public $s1 = 0;
    public $s2 = 1;


    public function s1(){
        echo '$s1';
    }


    public function s2(){
        echo '$s2';
    }
}


$name = new name();
echo $name->s2;
$name->s1();



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
