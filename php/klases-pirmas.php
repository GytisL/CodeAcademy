<?php
//funkcija kurioje patys priskiriam reiksmes
class zmogus {
    public $vardas;
    public $pavarde;
    public $gdata;
    function info(){
        $this->vardas = 'Andrius';//tai reiskia visos klases konteksta. Norint prieiti prie kokiu nors savybiu ar funkciju. Klases nuorodo per ->. Is funkcijos vidaus prieinam prie siuo atveju vardas savybiu
        $this->pavarde = 'Andriukaitis';
        $this->gdata = '1990-12-10';
        $s = 'Vardas: %s, Pavarde: %s, Gimimo data: %s';
        return sprintf($s, $this->vardas, $this->pavarde, $this->gdata);

    }
}

$zm = new zmogus(); //kompiuteris iesko klase ir pagal klase kuria objekta. Pagal objekta galima pakviesti jo funkcija.
echo $zm->info() . '<br>';//kvieciame funkcija
echo $zm->vardas . '<br>';//nuskaitome savybes
$zm->vardas = 'Tomas';//pakeiciame savybe
echo $zm->vardas . '<br>';//nuskaitome pakeista savybe
echo $zm->info() . '<br>';//funkcija naudos pakeista varda, bet neveik, nes priskirtas vardas $this->vardas = 'Andrius';




class darbuotojas {
    public $vardas = 'nezinomas';//savybem galima is karto priskirti reiksmes
    public $pavarde = 'nezinoma';
    public $atlyginimas = 0;
    function info(){
        $s = 'Vardas: %s, Pavarde: %s, Atlyginimas: %s EUR';
        return sprintf($s, $this->vardas, $this->pavarde, $this->atlyginimas);
    }
}

$db = new darbuotojas();
echo $db->info() . '<br>';//kvieciame funkcija
$db->vardas = 'Jonas';
echo $db->info() . '<br>';//kvieciame funkcija
$db->pavarde = 'Jonaitis';
$db->atlyginimas = 1000;
echo $db->info() . '<br>';//kvieciame funkcija

//duomenu atvaizdavimo variantai
var_dump($db);//1budas. parodo savybes
var_export($db);//2 budas. vercia i masyva
echo json_encode($db);//3 budas

unset($db);//panaikiname klases egzemplioriu
//echo $db->info(); //klaida


?>