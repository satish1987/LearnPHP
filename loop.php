<?php

//Loop: print 1 to 100
/* 
while(condition is true){
    execude code
}
*/
//print 1 to 100

$param = 101;

while($param <= 100){
    echo 'Number is:'.$param.'<br/>';
    $param++;
}

/*
do{
    //code here
}while(condition is true);
*/

do{
    echo 'Number is:'.$param.'<br/>';
    $param++;
}while($param <= 100);


/*
for loop
for(init counter; test counter; increment counter ){
    //your statement
}
*/

for ($param = 1; $param <= 100; $param++){
    echo 'Number is:'.$param.'<br/>';
}

//foreach array

//crazylearners.website@gmail.com

?>