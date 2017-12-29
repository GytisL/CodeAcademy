<?php

class personalas{
    public $darbuotojai;
    function persona($vardas, $pavarde, $lytis){
        if (!isset($this->darbuotojai))
          $this->darbuotojai = [];
        $this->darbuotojai [] = ['va' => $vardas, 'pa' => $pavarde, 'ly' => $lytis];
    }
    function personaloMot(){
        $mot = 0;
        for ($i = 0; $i < count($this->darbuotojai); $i++){
            if ($this->darbuotojai [$i]['ly']=="Moteris")$mot+=1;
        }
        return $mot;
    }

    function personaloVyr(){
        $vyr = 0;
        for ($i = 0; $i < count($this->darbuotojai); $i++){
            if ($this->darbuotojai [$i]['ly']=="Vyras")$vyr+=1;
        }
        return $vyr;
    }
}



$objektas = new personalas();

$objektas->persona('Sigita', 'S', 'Moteris');
$objektas->persona('Ona', 'O', 'Moteris');
$objektas->persona('Jonas', 'J', 'Vyras');
$objektas->persona('Algis', 'L', 'Vyras');

echo $objektas->personaloMot() . '<br>';

echo $objektas->personaloVyr();

?>


