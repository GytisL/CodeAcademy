<?php
class person {
    public $name;
    public $surname;
    public $age;
    function __construct($na, $su, $ag){
        $this->name = $na;
        $this->surname = $su;
        $this->age = $ag;
    }
}
$p = new person('Jonas', 'Jonaitis', 40);
var_dump($p);
?>