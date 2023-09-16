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

//select syntax select * from tablename

$mysql_query = "select * from users";
$result = $conn->query($mysql_query);

if($result->num_rows > 0){

echo "<table border='1'>";
echo "<tr><td>ID</td><td>First Name</td><td>Last Name</td><td>Email ID</td></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>". $row['id']. "</td><td>". $row['firstname'] ."</td><td>". $row['lastname'] ."</td><td>" .$row['email'] ."</td></tr>";
    }
echo "</table>";

}else{
    echo "0 records found";
}

$conn->close();

?>