<?php

$strNombre = filter_input(INPUT_POST, "nombre");
$strApellido = filter_input(INPUT_POST, "apellido");
$numEdad = filter_input(INPUT_POST, "edad");

if ($numEdad >= 40){
    require 'genero.php';
}
elseif ($numEdad < 18) {
    echo $strNombre . " " . $strApellido . " SE VA A DORMIR A SU CASA";
}
elseif (($numEdad >= 18) and ($numEdad <= 21)) {
    echo $strNombre . " " . $strApellido . " PUEDE INGRESAR A LA CHIQUITECA";
}
elseif (($numEdad >= 22) and ($numEdad <= 39)){
echo $strNombre . " " . $strApellido . " PUEDE INGRESAR A LA DISCOTECA";
}