<?php

//abstract tokia klase is kurios egzemplioriu pagaminti negalima. Reikia daryti paveldejima



abstract class AbstractClass//klase galima naudoti tik extendinant
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        echo $this->getValue() . "\n";
        //print $this->getValue() . "\n";//print = echo
    }
}

//$a = new AbstractClass();//negalima sukurti egzemplioriaus is abstrack klases

class ConcreteClass extends AbstractClass{
    protected function getValue(){
        return "ConcreteClass";
    }

    public function prefixValue($prefix){
        echo "{$prefix}__{$this->getValue()}";
    }
}

$a = new ConcreteClass();
$a->prefixValue('Labas');

















?>