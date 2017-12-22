<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$a = new handleForm();//iskelta is apacios
?>

<form method="get" action="formos-get.php">  <!-- method="get" pagal nutylejima bus get jeigu nieko nebus irasoma.  action="formos-get.php" - action reiskia kviesti ta pacia programa -->
    <label> Vardas: </label><input name="vardas" type="text" value="<?php echo $a->getVariable("vardas") ?>"><br> <!--pagal nutylejima kad patalpintu parametra, kad po issijungimo informacija isliktu-->
    <label> Pavarde: </label><input name="pavarde" type="text" value="<?php echo $a->getVariable("pavarde") ?>"><br>
    <label> Slaptazodis: </label><input name="slaptazodis" type="password"><br>
    <input type="submit" value="Vykdyti">
</form>

<!-- perimti i php duomenis -->

<?php

//var_dump($_GET);
//echo json_encode($_GET);
//var_export($_GET);

class handleForm {
    public $text;
    function __construct(){
        $this->text = '';
        if (count($_GET)>0){
            foreach($_GET as $key => $value){
                $this->text .= $key . '=' . $value . "<br>";
            }
        }
    }
    function toFIle(){
        $f = fopen("failai/forma-get-parms.txt", "w") or die("Unable to open file!");//jeigu komanda open nepavyko tai ji parodo kas atsitiko. die = echo ir return.   forma-get-parms.txt - nurodymas i ka irasom, galima ir folder'i nurodyt. description w-open a file for write only, taken from modes table.
        fwrite($f, $this->text);
    }
    //funkcija nuskaityti
    function fromFIle(){
        $f = fopen("failai/forma-get-parms.txt", "r") or die("Unable to open file!");//r-read a file for read only, taken from modes table.
        $s = fread($f, filesize("failai/forma-get-parms.txt"));
        fclose($f);
    return $s;
    }
    function getVariable($name){
        if (isset($_GET[$name])) return $_GET[$name];
            else return'';
    }
}

$a = new handleForm();
$a->toFIle();
$x = $a->fromFile();
echo $x;

?>

</body>
</html>
