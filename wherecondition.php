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

//select coulnm name or * from table_name order by column_name ASC|DESC

// select coulnm name or * from table_name limit param1, param2;

$mysql_query = "select * from users order by salary desc limit 0,5";
$result = $conn->query($mysql_query);

if($result->num_rows > 0){

echo "<table border='1'>";
echo "<tr><td>ID</td><td>First Name</td><td>Last Name</td><td>Email ID</td><td>Action</td></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>". $row['id']. "</td><td>". $row['firstname'] ."</td><td>". $row['lastname'] ."</td><td>" .$row['email'] ."</td><td><a href='delete.php?id=".$row['id']."'>Delete</a></td></tr>";
    }
echo "</table>";

}else{
    echo "0 records found";
}

$conn->close();

?>