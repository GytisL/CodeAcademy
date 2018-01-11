<!DOCTYPE html>
<html lang="lt">
<link>
<head>
    <meta charset="UTF-8">
    <title>Automobilių nuomos internetinė informacinė sistema | UAB Auto 7/24</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
    <!--   -->
    <link rel="stylesheet" href="/BaigiamasisDarbas/auto.css" type="text/css">
</head>

<body>
<?php
$car = false;
if (isset($_POST['update-form'])){
    $auto = new auto();
    $car = $auto->get($_POST['update-form']);
}
if ($car === false){
    $car = [
        'id' => '',
        'gamintojas' => '',
        'modelis' => '',
        'metai' => '',
        'kaina' => '',
        'pastabos' => '',
        'mime' => '',
        'nuotrauka' => ''
    ];
}
?>
<form method="post" action="auto-update.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="gamintojas">Gamintojas:</label><br>
        <input type="text" class="form-control" id="gamintojas" name="gamintojas" value="<?php echo $car['gamintojas']?>">
        <label for="modelis">Modelis:</label><br>
        <input type="text" class="form-control" id="modelis" name="modelis" value="<?php echo $car['modelis']?>">
        <label for="metai">Metai:</label><br>
        <input type="text" class="form-control" id="metai" name="metai" value="<?php echo $car['metai']?>">
        <label for="kaina">Kaina:</label><br>
        <input type="text" class="form-control" id="kaina" name="kaina" value="<?php echo $car['kaina']?>">
        <label for="pastabos">Pastabos:</label><br>
        <textarea class="form-control" id="pastabos" name="pastabos"><?php echo $car['pastabos']?></textarea>
        <label for="nuotrauka">Nuotrauka:</label><br>
        <input type="file" class="form-control" id="nuotrauka" name="nuotrauka">
        <button type="submit" class="btn btn-primary mt-1" name="submit">Vykdyti</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $car['id']?>">
</form>
</body>
</html>