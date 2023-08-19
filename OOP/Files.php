<?php

/*
First Letter of Class should be capital.
File name should be match with class name.
class is keyword used to define a class.
class is opend and closed with {} like function.
*/

Class Files{

    function displayContent($filename) : bool{
        $result = true;

        try{
            echo "Read the content of the file: $filename <br/>";
            $content = file_get_contents($filename);
            echo "Displaying content of file: $filename <br/>";
            echo $content;
        }catch(Exception $e){
            $result = false;
        }

        return $result;

    }

    function displayContent1(){
        $this->displayContent('test.txt');
    }
    
}   


$files_obj = new Files();
$files_obj->displayContent('test.txt');
echo '<br/>';
$files_obj->displayContent('test1.txt');