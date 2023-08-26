<?php

/*
First Letter of Class should be capital.
File name should be match with class name.
class is keyword used to define a class.
class is opend and closed with {} like function.
*/

//Access Modifier

class Car{

    public $name;
    public $color;

    function __construct()
    {
        //$this->name = $name;
       // $this->color = $color;
        
    }

    function helloClass(){
        
        //echo "hello car class $this->name";
        $this->name = 'Tata';
        return $this;

    }

    function helloClass2(){

        echo 'my car model is: '.$this->name;

    }

}


$car_obj = new Car();
$car_obj->name = "Ferrari";
$car_obj->color = "Red";
$car_obj->helloClass();
echo '<br/>';
echo $car_obj->name;
echo '<br/>';
echo "$car_obj->name is $car_obj->color";

/*
$car_obj = new Car('ferrari', 'Red');
//$car_obj->helloClass();
//echo '<br/>';
//$car_obj->helloClass2();
//chain method

$car_obj->helloClass()->helloClass2();
//echo '<br/>';
//$car_obj->helloClass2();
*/
?>