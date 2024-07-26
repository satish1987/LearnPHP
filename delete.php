<?php

// select coulnm name or * from table_name where coulumn_name operator value or Condition logic

// delete from table_name where column_name operator value

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

//select syntax select * from tablename

$id = $_REQUEST['id'];

$sql_query = "delete from users where id=$id";

if($conn->query($sql_query) === TRUE){
    echo "Rcord deleted successfully.";
}else{
    echo "Error deleteing record". $conn->error;
}

$conn->close();

?>