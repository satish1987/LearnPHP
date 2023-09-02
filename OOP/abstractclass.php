<?php

/* keyword abstract

abstract class parentClass{

    abstract public function method1();
    abstract public function method2($param1, $param2);
    abstract public function method3() : string;

}

*/

abstract class car{

    public $name;
    public function __construct($name)
    {
        $this->name = $name;
        
    }

    abstract public function intro() : string;

}

class audi extends car{

    public function intro() : string{
        return "choose German quality! i am an $this->name";
    }
}

class volvo extends car{

    public function intro() : string{
        return "proud to be Swedish! i am an $this->name";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo '<br/>';

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo '<br/>';