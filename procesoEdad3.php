<?php

$strBlusa = filter_input(INPUT_POST, "blusa");
$strPantalonM = filter_input(INPUT_POST, "pantalonM");
$strZapatosM = filter_input(INPUT_POST, "zapatosM");
$strNombre = filter_input(INPUT_POST, "nombre");
$strApellido = filter_input(INPUT_POST, "apellido");

if ($strBlusa == "sescote" and (($strPantalonM == "ptela" or $strPantalonM == "fmediana") and $strZapatosM == "scerrado" or $strZapatosM == "tacones")){
    echo $strNombre. " " . $strApellido . " Puede ingresar a la Viejoteca";
} 
else {
    echo $strNombre. " " . $strApellido . " No puede ingresar a la Viejoteca";
}

