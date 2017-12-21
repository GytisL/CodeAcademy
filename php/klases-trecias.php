<?php

class zmogus{
    public $vardas;
    public $pavarde;
    public $amzius;
    function __construct($v, $p, $a){
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->amzius = $a;
    }
    static function keisti($s){
        return ucfirst(strtolower($s));
    }
    function keisti2($s){
        return ucfirst(strtolower($s));
        //return self::keisti($s)//funkcija kuri savo metu daro statine funkcija. Jeigu statine funkcija naudoja toje pacioje klaseje kurioje yra statine funkcija
    }

}
class mokinys extends zmogus { //nauja klase kuri paveldi viska is pirmos klases, siuo atveju zmogus
    function keisti2($s){
        //return strtoupper($s);
        return strtoupper($s) . ' ' . parent::keisti2($s);//ivykdo sena funkcija kuri buvo pakeista: function keisti2($s)
    }
}

echo zmogus::keisti('tOmas') . '<br>';
//echo zmogus::keisti2('tOmas') . '<br>'; //mes klaida, nes ji yra static function
$z = new zmogus('Jonas', 'Jonaitis', 25);
//tik suskurus egzemplioriu, siuo atveju $z = new zmogus('Jonas', 'Jonaitis', 25)
echo $z->keisti2('tOmas') . '<br>';
$z = new mokinys('Antanas', 'Jonaitis', 25);
echo $z->keisti2('tOmas') . '<br>';










?>