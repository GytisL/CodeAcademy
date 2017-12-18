<?php
function rezultatas ($x, $y, $z){
    $rez = ($x**2 + sqrt($y) + $x * $y + $z);
    return $rez;
}
echo rezultatas (2, 5, 9);

?>