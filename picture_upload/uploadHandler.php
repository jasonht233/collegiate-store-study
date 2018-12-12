<?php
// receive the file 
var_dump($_FILES); // the upload files are quite different from $get and $post 
print_r($_FILES);
$file = $_FILES["img"];
//we can go to test it is right or not 
if ($file["error"] == 0) {
 //check the type of the file 
 $typeArr = explode("/", $file["type"]);
 if($typeArr[0]== "image"){
  //if it is a kind of the files loke png or jpg 
  $imgType = array("png","jpg","jpeg");
  if(in_array($typeArr[1], $imgType)){
   //make a new file name 
   $imgname = "file/".time().".".$typeArr[1];
   //upload the file 
   $bol = move_uploaded_file($file["tmp_name"], $imgname);
   if($bol){
    echo "success ";
   } else {
    echo "failed";
   };
  };
 } else {
  
  echo "check again";
 };
} else {
 //fail
 echo $file["error"];
};
?>