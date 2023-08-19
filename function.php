<?php
//block of statement that can be used repeatedly.

/*
function nameOfFunction(){
    //write code here
}
function nameOfFunction($parameters ....){
    //write code here
}
*/


function printMyName(){
    echo 'Hello my name is Satish.';
}

function printMyAge($param_age){
    echo 'My age is: '.$param_age;
}

printMyName();
echo '<br/>';
printMyAge(24);
?>