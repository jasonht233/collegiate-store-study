<?php 

$host = '127.0.0.1';
$user = 'root';
$pw ="";
$dbname = 'php';

$db = new mysqli($host,$user,$pw,$dbname);



if($db->connect_errno <> 0){
    echo "connections failed";
    echo $db->connect_error;
}

$jdg = $db->query("insert into msg (content, user,intime) values ('greetings from php','php.file',1111);");

if($jdg == false){
    echo "insertiong failed" . "insert into msg (content, user,intime) values ('greetings from php','php.file',1111);" ;
}



$order = "insert into msg (content, user,intime) values ('another greeting','php',2333);";
$jdg = $db->query($order);
if($jdg == false){
    echo "insertion failed".$order;
}

$order = "select * from msg;";
$jdg = $db->query($order);
if($jdg == false){
    echo "insertion failed".$order;
}



//var_dump($mysqli);
?>