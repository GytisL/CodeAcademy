<?php
class zmogus {
    const copy = 'CodeAcademy';//konstantines reiksmes
    public $vardas;
    public $pavarde;
    public $amzius;
    private $sablonas = 'Vardas: %s, pavarde: %s, amzius: %s';
    function __construct($v, $p, $a = 'nezinomas'){
        $this->vardas = $this->pakeisti($v);
        $this->pavarde = $this->pakeisti($p);
        $this->amzius = $a;
    }
    //private function pakeisti($s){
        private function pakeisti($s){//protected is klases isores priejimui. protected pakeiciamas vietoj private
        return ucfirst(strtolower($s));
    }
    public function eilute(){
        return zmogus::copy . ' : ' . sprintf($this->sablonas, $this->vardas, $this->pavarde, $this->amzius);
    }
}
$z = new zmogus ('Jonas', 'Jonaitis', '25');
echo $z->vardas . '<br>';
//echo $z->sablonas . '<br>';//klaida
echo $z->eilute() . '<br>';
//echo $z->pakeisti('Jonas') . '<br>';//taip negalima daryti. Klaida.
define('aaa', 'labas'); //konstantai 'aaa' priskiriama reiksme 'labas'.
echo aaa . '<br>';
echo zmogus::copy . '<br>';

class mokinys extends zmogus {//extends paveldi visas funkcijas kurios buvo parasytos
    public $pazymys;
    function __construct($v, $p, $a, $pa){
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->amzius = $a;
        $this->pazymys = $pa;
    }
}
$mo = new mokinys('Petras', 'Petraitis', 21, 10);
var_dump($mo);
echo mokinys::copy . '<br>';
echo $mo->eilute() . '<br>';
?>