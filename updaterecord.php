<?php

$servername = 'localhost';
$username = 'root';
$password = 'yourpasswd';
$databasename = 'learnphp';

//going to create connection
$conn = new mysqli($servername, $username, $password, $databasename);

//check connection 
if($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}

$response = $_REQUEST;
//print_r($response);

// update tablename set column_name = new_value where condition logic

$mysql_query = "update users  set firstname='".$response['firstname']."', lastname='".$response['lastname']."', email='".$response['email']."', salary='".$response['salary']."' where id =".$response['id'];

if($conn->query($mysql_query) === true){
    echo "Record updated successfully.";
}else{
    echo "error: ". $mysql_query ."<br/>" . $conn->error;
}
$conn->close();


?>