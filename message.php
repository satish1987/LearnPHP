<?php
//error_reporting(E_ALL);

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

//echo "Connected successfully.";

$response = $_REQUEST;
//print_r($response);

// for insert new row  insert into table_name (column name(comma seperated)) values (column values (comma seperated))

$mysql_query = "insert into users (`firstname`, `lastname`, `email`) values ('".$response['firstname']."','".$response['lastname']."','".$response['email']."')";

if($conn->query($mysql_query) === true){
    echo "New row inserted";
}else{
    echo "error: ". $mysql_query ."<br/>" . $conn->error;
}
$conn->close();

?>