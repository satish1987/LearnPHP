<?php

/*
 static keyword

 class classname{

    public static function staticmethod(){
        echo 'hello php';
    }
 }

 classname::staticmethod();
*/

class helloPhp{
    public static function printMsg(){
        echo 'hello PHP';
    }
}

echo  helloPhp::printMsg();