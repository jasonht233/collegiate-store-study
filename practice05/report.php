<?php

include('input.php');


$content = $_POST['content'];
$user = $_POST['user'];

// $content = $_GET['content'];
// $user = $_GET['user'];

$input = new input();
$jdg = $input->post($content);

if($jdg == false){
    die("empty content");
}

$jdg = $input->post($user);
if($jdg == false){
    die('empyt user');
}


var_dump($content , $user);





?>