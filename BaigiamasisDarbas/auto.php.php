<?php

class auto {
    public $message = '';
    private $cnn = false;
    //private $host = 'test.lt';
    //private $dbname = 'test';
    //private $userid = '';
    //private $password = 'test';
    function __construct(){
            //$this->message = "Prisijungimas prie DB ";
        try{
            $this->cnn = new PDO('mysql:host=test.lt;dbname=test', 'root');
            //$this->cnn = new PDO("mysql:host={$this->host}; dbname={$this->dbname}", $this->userid, $this->password);
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->message .= "Prisijungimas sekmingas ";
        }
            catch(PDOException $err){
            $this->message = "Prisijungimas nesekmingas: " . $err->getMessage();
        }
    }
    function getList(){
        $this->message = "Automobiliu saraso skaitymas is DB";
        $cars =
            
        return [
            ['id' => '1', 'gamintojas' => 'Bmw', 'modelis' => '750Li', 'autMetai' => '1996'],
            ['id' => '2', 'gamintojas' => 'Audi', 'modelis' => 'RS7', 'autMetai' => '2017'],
            ['id' => '3', 'gamintojas' => 'Lada', 'modelis' => '11', 'autMetai' => '1980'],
            ['id' => '4', 'gamintojas' => 'Mercedes-Benz', 'modelis' => 'E350 AMG', 'autMetai' => '2015'],
        ];
    }
}
$a = new auto();
var_dump($a);
$b = $a->getList();
var_dump($b);

?>
