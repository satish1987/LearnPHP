<?php
date('Y-m-d'); // 2023-08-05
date('d-m-Y'); //05-08-2023
date('Y-m-d H:i:s'); //2023-08-05 15:13:10
$t = date('H');
//if time is less than 8pm than good day
//if condition
if($t < '20'){
    echo 'Have a good day';
}
echo  '<br/>';
//if else condition
if($t < '20'){
    echo 'Have a good day';
}else{
    echo 'Have a good night';
}

echo '<br/>';
//Constants two type 1 case sensitive 2 case insensitive
define('GREETING', 'Welcome to my class');
echo GREETING;

if(GREETING == 'Welcome to my class'){
    echo 'Welcome Guys';
}


?>