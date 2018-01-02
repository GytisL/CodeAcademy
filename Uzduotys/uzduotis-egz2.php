<?php

class automobiliai
{
    public $sarasas;
    function saras($gamintojas, $modelis, $kuras, $kuroSanaudos)
    {
        if (!isset($this->sarasas))
            $this->sarasas = [];
        $this->sarasas [] = ['ga' => $gamintojas, 'mo' => $modelis, 'ku' => $kuras, 'sa' => $kuroSanaudos];
    }
    function kuroVidurkisDyzelis()
    {
        $sum = 0;
        $kiek = 0;
        for ($i = 0; $i < count($this->sarasas); $i++) {
            if ($this->sarasas[$i]['ku'] == 'Dyzelis') {
                $sum += $this->sarasas[$i]['sa'];
                $kiek += 1;
            }
        }
        return $sum / $kiek;
    }
    function kuroVidurkisBenzinas()
    {
        $sum = 0;
        $kiek = 0;
        for ($i = 0; $i < count($this->sarasas); $i++) {
            if ($this->sarasas[$i]['ku'] == 'Benzinas') {
                $sum += $this->sarasas[$i]['sa'];
                $kiek += 1;
            }
        }
        return $sum / $kiek;
    }
}

$objektas = new automobiliai();

$objektas->saras( 'Mercedes-benz', 'E350', 'Benzinas', 11);
$objektas->saras( 'Audi', 'RS7', 'Dyzelis', 9.6);
$objektas->saras( 'Mercedes-benz', 'S600', 'Benzinas', 12);
$objektas->saras('Mercedes-benz', 'S320', 'Benzinas', 10);
$objektas->saras( 'Audi', 'A6', 'Dyzelis', 8);

echo $objektas->kuroVidurkisDyzelis() . '<br>';
echo $objektas->kuroVidurkisBenzinas();