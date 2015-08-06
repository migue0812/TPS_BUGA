<?php

$opcionH = filter_input(INPUT_POST, "opcion");
$opcionM = filter_input(INPUT_POST, "opcion");

if($opcionH == "hombre"){
        require 'ropaH.php';
}
if ($opcionM == "mujer"){
        require 'ropaM.php';
}

