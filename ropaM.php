<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="procesoEdad3.php" method="post">
            <?php $strNombre = filter_input(INPUT_POST, "nombre");
$strApellido = filter_input(INPUT_POST, "apellido"); ?>
            <input type="hidden" id="nombre" name="nombre" value="<?php echo $strNombre ?>">
            <input type="hidden" id="apellido" name="apellido" value="<?php echo $strApellido ?>">
       <font size=8 color="black" face="Lucida Calligraphy">Por favor escoja su atuendo </font>
            <br><br>
       <font size=6 color="gray" face="Lucida Calligraphy">Blusa: </font>
            <select required id="blusa" name="blusa"> 
                <option value=""> Seleccione </option> 
                <option value="sescote"> Sin Escote </option>
                <option value="cescote"> Con escote </option> 
                <option value="ombliguera"> Ombliguera </option>
                <option value="otra"> Otra </option> 
            </select>
            <br>
            <font size=6 color="gray" face="Lucida Calligraphy">Pantalón:  </font>
            <select required id="pantalonM" name="pantalonM">
                <option value=""> Seleccione </option> 
                <option value="ptela"> Tela </option> 
                <option value="fmediana"> Falda Mediana </option> 
                <option value="mfalda"> Minifalda </option> 
                <option value="jean"> Jean </option> 
                <option value="otro"> Otro </option> 
            </select>
            <br>
            <font size=6 color="gray" face="Lucida Calligraphy">Zapatos: </font>
            <select required id="zapatosM" name="zapatosM">
                <option value=""> Seleccione </option> 
                <option value="scerrado"> Serio cerrado </option> 
                <option value="tacones"> Tacones </option> 
                <option value="tenis"> Tenis </option>
                <option value="chanclas"> Chanclas </option>
                <option value="otro"> Otro </option>
            </select>
            <br><br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
