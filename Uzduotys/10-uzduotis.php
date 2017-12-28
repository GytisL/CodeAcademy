<?php


class NumberList {
    public $numbers;
    function add($number){
        if (!isset($this->numbers))
        $this->numbers = [];
        $this->numbers[] = $number;//nieko nenurodzius numbers skliaustuose tai deda viska i pabaiga
    }
    function average(){
        $sum = 0;
        for ($i=0; $i<count($this->numbers); $i++){
            $sum+=$this->numbers[$i];
        }
        return $sum / count($this->numbers);
    }
}

$objektas = new NumberList();

$objektas->add(1);
$objektas->add(2);
$objektas->add(3);
$objektas->add(4);
$objektas->add(11);

echo $objektas->average();


?>