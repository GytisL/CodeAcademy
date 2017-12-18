<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
function spalvos_kodas ($spalva)
{  //funkcija negali prasideti skaiciumi
    switch ($spalva) {
        case 'raudona':
            $kodas = 'red';
            break; //butinai parasyti break, kad neitu i sekanti case
        case 'geltonas':
            $kodas = 'yellow';
            break;
        case 'tamsus':
            $kodas = '#222222';
            break;
        default:
            $kodas = 'black';
    }
    return $kodas;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <p>Lorem ipsum <span>dolor sit amet<span style="color:<?php echo spalvos_kodas('raudona')?>">, consectetur adipisicing elit.</span>
     A accusamus architecto iure nulla pariatur. <span style="color:<?php echo spalvos_kodas('geltonas')?>">Architecto, molestiae saepe.</span>
     Ad dignissimos, esse, ex, fuga id iure laborum necessitatibus neque unde velit voluptas!</p>

</body>
</html>