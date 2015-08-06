<?php

$strBlusa = filter_input(INPUT_POST, "blusa");
$strPantalonM = filter_input(INPUT_POST, "pantalonM");
$strZapatosM = filter_input(INPUT_POST, "zapatosM");

if ($strBlusa == "sescote" and (($strPantalonM == "ptela" or $strPantalonM == "fmediana") and $strZapatosM == "scerrado" or $strZapatosM == "tacones")){
    echo "PUEDE INGRESAR A LA VIEJOTECA";
} 
else {
    echo "NO PUEDE INGRESAR A LA VIEJOTECA";
}

