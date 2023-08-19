<?php
//Switch statement save execution time

/*
switch($param){
    case A:
        code to be executed when $param == A
    break;
    case B:
        code to be executed when $param == B
    break;
    default:
        default code to be execute
}
*/

$param = 'green';

switch($param){

    case "red":
        echo "Your favorite color is red";
    break;

    case "blue":
        echo "Your favorite color is blue";
    break;

    case "green":
        echo "Your favorite color is green";
    break;

    default:
        echo "Your favorite color is neither red, blue nor green";
    break;
}

?>