<?php

class masinos{
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($gamintojas, $modelis, $metai){
        $this->gamintojas = ucfirst(strtolower($gamintojas));
        $this->modelis = ucfirst(strtolower($modelis));
        $this->metai = ucfirst(strtolower($metai));
    }
    function eilute(){
        {
            $a = 'gamintojas: %s, modelis: %s, metai: %s';
            return sprintf($a, $this->gamintojas, $this->modelis, $this->metai);
        }
    }
}
$auto = [];
$auto[] = new masinos('Mercedes-benz', 'E350', '2010');
$auto[] = new masinos('Bmw', '525', '2012');
$auto[] = new masinos('Audi', 'S8', '2011');


//var_dump($auto);


foreach ($auto as $aa){
    echo $aa->eilute() . '<br>';
}



?>