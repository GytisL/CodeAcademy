<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="post">
    <label>Automobilio_gamintojas: </label><input name="gamintojas" type="text"><br>
    <label>Automobilio_modelis: </label><input name="modelis" type="text"><br>
    <label>Pagaminimo_metai: </label><input name="metai" type="text"><br>
    <input type="submit" value="Vykdyti">
</form>

<?php
class handleForm{
    public $text;
    function toText($gami, $model, $meta){
            $sablonas = "Automobilio_gamintojas: %s, modelis: %s, metai: %s";
            return sprintf($sablonas, $gami, $model, $meta);
    }
}


$masina = new handleForm();
if (isset($_GET['gamintojas']) && isset ($_GET['modelis']) && isset ($_GET['metai'])){
    echo $masina->toText($_GET['gamintojas'], $_GET['modelis'], $_GET['metai']);

} else echo 'Iveskite_duomenis';


?>
</body>
</html>