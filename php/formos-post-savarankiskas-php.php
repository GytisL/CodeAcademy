<?php

class salis{
    function eilute ($salis, $sostine, $gyventojai){
        return "<tr><td>{$salis}</td>" .
            "<td>{$sostine}</td>" .
            "<td>{$gyventojai}</td></tr>";
    }
}

echo "<table>";

$c = new salis();
echo $c->eilute($_GET['salis'], $_GET['sostine'], $_GET['gyventojai']);
echo "</table>";

?>