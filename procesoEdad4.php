<?php

$strCamisa = filter_input(INPUT_POST, "camisa");
$strPantalonH = filter_input(INPUT_POST, "pantalonH");
$strZapatosH = filter_input(INPUT_POST, "zapatosH");

if (($strCamisa == "mcorta" or $strCamisa == "mlarga") and $strPantalonH == "ptela" and $strZapatosH == "zmaterial"){
    echo "PUEDE INGRESAR A LA VIEJOTECA";
} 
else {
    echo "NO PUEDE INGRESAR A LA VIEJOTECA";
}
