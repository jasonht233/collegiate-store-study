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


$order = "SELECT * FROM msg ORDER BY intime DESC;";
$values=$db->query($order);

if($values == false){
    die("fail to find");
}

//var_dump($values->fetch_array() );

/*
array (size=8)
  0 => string '24' (length=2)
  'id' => string '24' (length=2)
  1 => string 'jason' (length=5)
  'user' => string 'jason' (length=5)
  2 => string 'hello my name is haotian' (length=24)
  'content' => string 'hello my name is haotian' (length=24)
  3 => string '1544563580' (length=10)
  'intime' => string '1544563580' (length=10)
*/


// echo $row['id'];
// echo "<br/>".$row['content'];
// // 23hello my name is haotian

// $row = $values->fetch_array(MYSQLI_ASSOC);
// echo $row['id'];
// echo "<br/>".$row['content'];


$container = [];
//fetch_array cannot be reduced. (only one time)
while ($row = $values->fetch_array( MYSQLI_ASSOC )){ //using the while loop to iterate it
    $container[] = $row; //you can directly by default to add $row and it can increment by itself 
}

var_dump($container);



//var_dump($mysqli);
?>