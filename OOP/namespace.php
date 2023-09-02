<?php

/*
grouping of class
with the help of namespace you can create same name class multiple times.

keyword: namespace
*/

namespace Html;
class table{
    public $title = "";
    public $numRows = 0;

    public function message(){
        echo "<p>Table {$this->title} has {$this->numRows} rows.</p>";
    }
}

$table = new table();

$table->title = "My Table";
$table->numRows = 5;

?>

<html>
<body>
    <?php
    echo $table->message();
    ?>
</body>

</html>

<?php

/**
 * $table  = new Html\table();
 */

 //next class create form with the help of html & php and save data in mysql.
 //1 create form
 //2 create database (Mysql)
 //3 connect with datatbase
 //4 create table
 //5 insert,  update, delete, view table with the help of php and mysql