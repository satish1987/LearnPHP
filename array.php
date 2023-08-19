<?php

$array = array('apple', 'mango', 'banana');
$array1 = ['apple', 'mango', 'banana', 'toy'];
//print_r //for print array

//Associative array

$array2 = ['fruit3' => 'banana', 'fruit1' => 'apple', 'fruit2' => 'mango'];

/*
for($param = 0; $param <= 2; $param++){
    echo 'Array value is: '.$array[$param].'<br/>';
}
*/

foreach($array2 as $key=>$val){
    echo 'Key '.$key.' value is:'.$val.'<br/>';
}

/*
foreach($array as $val){
    echo $val.'<br/>';
}
*/


?>