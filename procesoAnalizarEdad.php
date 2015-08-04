<?php

$numEdadH = filter_input(INPUT_POST, "inputEdadH");
$strCamisa = filter_input(INPUT_POST, "camisa");
$strPantalonH = filter_input(INPUT_POST, "pantalonH");
$strZapatosH = filter_input(INPUT_POST, "zapatosH");
$numEdadM = filter_input(INPUT_POST, "inputEdadM");
$strBlusa = filter_input(INPUT_POST, "blusa");
$strPantalonM = filter_input(INPUT_POST, "pantalonM");
$strZapatosM = filter_input(INPUT_POST, "zapatosM");
$opcionH = filter_input(INPUT_POST, "opcion");
$opcionM = filter_input(INPUT_POST, "opcion");
$numEdadTotal = $numEdadH + $numEdadM;       
       
/***
switch ($opcionH == "hombre") {
    case $numEdadH >= 18 and $numEdadH <= 21:
echo "Puede entrar a la Chiquiteca";
        break;
    case $numEdadH >= 22 and $numEdadH <= 39:
echo "Puede entrar a la Discoteca";
        break;
    case $numEdadH >= 40 and $strCamisa == "mcorta" or "mlarga" and $strPantalonH == "ptela" and $strZapatosH == "zmaterial":
echo "Puede entrar a la Viejoteca";
        break;
    default:
        break;
}
switch ($opcionH == "mujer") {
    case $numEdadH >= 18 and $numEdadH <= 21:
echo "Puede entrar a la Chiquiteca";
        break;
    case $numEdadH >= 22 and $numEdadH <= 39:
echo "Puede entrar a la Discoteca";
        break;
    case $numEdadH >= 40 and $strBlusa == "sescote" and $strPantalonM == "ptela" or "fmediana" and $strZapatosM == "scerrado" or "tacones":
echo "Puede entrar a la Viejoteca";
        break;
    default:
        break;
}    
***/

if ($numEdadTotal < 18) {
    echo '<font size=34>SE VA A DORMIR A SU CASA </font>';
}
if (($numEdadTotal >= 18) and ($numEdadTotal <= 21)) {
    echo '<font size=34>PUEDE INGRESAR A LA CHIQUITECA </font>';
}
elseif (($numEdadTotal >= 22) and ($numEdadTotal <= 39)){
echo '<font size=34>PUEDE INGRESAR A LA DISCOTECA </font>';
}
if ($numEdadTotal >= 40){
    IF($opcionH == "hombre"){
        if (($strCamisa == "mcorta" or $strCamisa == "mlarga") and $strPantalonH == "ptela" and $strZapatosH == "zmaterial"){

    echo "<font size=34>PUEDE INGRESAR A LA VIEJOTECA </font>";
} 
else {
    echo "<font size=34>NO PUEDE INGRESAR A LA VIEJOTECA </font>";
}}}

if ($numEdadTotal >= 40){
    IF($opcionM == "mujer"){
        if ($strBlusa == "sescote" and ($strPantalonM == "ptela" or $strPantalonM == "fmediana") and $strZapatosM == "scerrado" or $strZapatosM == "tacones"){

    echo "<font size=34>PUEDE INGRESAR A LA VIEJOTECA </font>";
} 
else {
    echo "<font size=34>NO PUEDE INGRESAR A LA VIEJOTECA </font>";
}}}
