<?php


class savarankiskas_automobilio_klase{
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($g, $mod, $met){
        $this->gamintojas = $g;
        $this->modelis = $mod;
        $this->metai = $met;
    }
}



?>