<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="procesoEdad4.php" method="post">
            <?php $strNombre = filter_input(INPUT_POST, "nombre");
$strApellido = filter_input(INPUT_POST, "apellido"); ?>
            <input type="hidden" id="nombre" name="nombre" value="<?php echo $strNombre ?>">
            <input type="hidden" id="apellido" name="apellido" value="<?php echo $strApellido ?>">
            <font size=8 color="black" face="Lucida Calligraphy">Por favor escoja su atuendo </font>
            <br><br>
            <font size=6 color="gray" face="Lucida Calligraphy">Camisa: </font>
            <select required id="camisa" name="camisa"> 
                <option value=""> Seleccione </option> 
                <option value="mcorta"> Seria manga corta </option> 
                <option value="mlarga"> Seria manga larga </option> 
                <option value="camisilla"> Camisilla </option> 
                <option value="buso"> Buso </option> 
                <option value="otra"> Otra </option> 
            </select>
            <br>
            <font size=6 color="gray" face="Lucida Calligraphy">Pantalón: </font>
            <select required id="pantalonH" name="pantalonH"> 
                <option value=""> Seleccione </option> 
                <option value="ptela"> Tela </option> 
                <option value="jean"> Jean </option>
                <option value="pantaloneta"> Pantaloneta </option>
                <option value="otro"> Otro </option> 
            </select>
            <br>
            <font size=6 color="gray" face="Lucida Calligraphy">Zapatos: </font> 
            <select required id="zapatosH" name="zapatosH"> 
                <option value=""> Seleccione </option> 
                <option value="zmaterial"> Material </option>
                <option value="tenis"> Tenis </option>
                <option value="chanclas"> Chanclas </option>
                <option value="otro"> Otro </option> 
            </select>
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
