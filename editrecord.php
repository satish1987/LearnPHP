<html>
    <head>
        <title>This is my first form</title>
    </head>
    <body>
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
$id = $_REQUEST['id'];

$mysql_query = "select * from users where id=$id";
$result = $conn->query($mysql_query);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    ?>
        <form action="updaterecord.php?id=<?php echo $id ?>" method="post">
            First Name: <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>"><br/>
            Last Name: <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"><br/>
            Email: <input type="email" name="email" value="<?php echo $row['email'] ?>"><br/>
            Salary: <input type="salary" name="salary" value="<?php echo $row['salary'] ?>"><br/>
            <input type="submit">
        </form>
    <?php
    }
}
?>
</body>
</html>