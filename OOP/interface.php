<?php
/* syntax
    
interface classname{
    public function method1();
    public functtion method2();
}
*/

interface animal{
    public function makesound();
}

class cat implements animal{
    public function makesound()
    {
        echo 'meow';
    }
}

class dog implements animal{
    public function makesound()
    {
        echo 'bark';
    }
}

$catObj = new cat();
$dogObj = new dog();

$animalsSounds = [$catObj, $dogObj];

foreach($animalsSounds as $sound){
    echo $sound->makesound();
    echo '<br/>';
}

