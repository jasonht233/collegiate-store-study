using php to connect with php 
and using php language to deal wit the data base 

we need use 

    $mysqli = new mysqli($host,$user,$pw,$dbname);

how to distiguish:
    if($mysqli->connect_errno <> 0){
        echo "connections failed";
        echo $db->connect_error;
    }

    if the host is connected correctly: 
    there would be no connect_errno 

how to implement sql:
 $var->query("sql language in this one");
 it would return a value, if it is right, return true , else return false;




 using sql to find or implement the database:


 $order = "SELECT * FROM msg ORDER BY intime DESC;";


$values=$db->query($order);
var_dump($values);

#$values is an object that contains the object of what we found; 

mysqli_result-> means the values in the mysqli 


how to get a specific values from the object

    $values->fetch_array(#num) <<$values is the varaible for the obejct 
    it can fetch one result from the object 

    tips: if there is some values in the object, it would return the values or array however if there is empty, it would return "NULL"

    fetch_array cannot be reduced. (only one time)
    while ($row = $values->fetch_array( MYSQLI_ASSOC )){ //using the while loop to iterate it

    using the local variable to store the value. 

    

    

 