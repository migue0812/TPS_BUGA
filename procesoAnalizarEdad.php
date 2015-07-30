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

/***
if ($opcionH == "hombre"){
$numEdadH >= 18 and $numEdadH <= 21;
    echo "Puede entrar a la Chiquiteca"; 
}
if ($numEdadH >= 22 and $numEdadH <= 39){
    echo "Puede entrar a la Discoteca";
}
if ($numEdadH >= 40 and $strCamisa == "mcorta" or "mlarga" and $strPantalonH == "ptela" and $strZapatosH == "zmaterial") {
    echo "Puede entrar a la Viejoteca";   
}*/