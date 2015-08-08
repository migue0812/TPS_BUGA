<?php

$strCamisa = filter_input(INPUT_POST, "camisa");
$strPantalonH = filter_input(INPUT_POST, "pantalonH");
$strZapatosH = filter_input(INPUT_POST, "zapatosH");
$strNombre = filter_input(INPUT_POST, "nombre");
$strApellido = filter_input(INPUT_POST, "apellido");

if (($strCamisa == "mcorta" or $strCamisa == "mlarga") and $strPantalonH == "ptela" and $strZapatosH == "zmaterial"){
    echo $strNombre. " " . $strApellido . " Puede ingresar a la Viejoteca";
} 
else {
    echo $strNombre. " " . $strApellido . " No puede ingresar a la Viejoteca";
}
