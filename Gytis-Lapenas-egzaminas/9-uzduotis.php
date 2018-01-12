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
    function asmensDuomenys(){
        $p = "%s, %s, %s (Amžius)";
        echo sprintf($p, $this->name, $this->surname, $this->age);
    }
}
$p = new person('Jonas', 'Jonaitis', 40);
$p->asmensDuomenys();
echo '<br>';
class staff extends person {}
$p = new staff('Petras', 'Petraitis', 50);
$p->asmensDuomenys();
echo '<br>';
class client extends person {
    function asmensDuomenys(){
        $p = "%s, %s, %s (Darbuotojas)";
        echo sprintf($p, $this->name, $this->surname, $this->age);
    }
}
$p = new client('Tomas', 'Tomaitis', 45);
$p->asmensDuomenys();
?>