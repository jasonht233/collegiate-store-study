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
 