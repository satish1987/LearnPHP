<?php

/*
First Letter of Class should be capital.
File name should be match with class name.
class is keyword used to define a class.
class is opend and closed with {} like function.
*/

class Database{

    //properties (variable) of class
    public $dbconnection;
    public $records;

    //methods (function) of class
    function openConnection() : bool{

    }
    function closeConnection() : bool{

    }

    function fetchRecords($id) : array{

    }

    function insert($data) : bool{

    }

    function update($id, $data) : bool{

    }

    function delete($id) : bool{

    }

}