<?php

$t = date("h");

if ($t > "6") {
    echo "Have a good day!";
}
else echo 'Good evening!';

echo '<br>';

$a = 6;
if ($a == 5) echo 'Lygu' . '<br>';
else if ($a > 5) echo "daugiau<br>";   //elseif gali buti daug
else {
    echo 'maziau';
    echo '<br>'; // jei echo daugiau nei dvi reikia figuriniu skliaustu

}

?>