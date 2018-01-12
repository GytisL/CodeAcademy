<?php
class numberList {
    public $numbers=[];
    function insert($numbers){
        $this->numbers[] = $numbers;
    }
    function average(){
        if (count($this->numbers)>0){
            $n = 0;
            foreach($this->numbers as $numbers){
                $n += strlen($numbers);
            }
            return $n / count($this->numbers);
        }
        else return 0;
    }
}
$num = new numberList();
$num->insert('1');
$num->insert('2');
$num->insert('3');
$num->insert('4');
echo $num->average();
?>