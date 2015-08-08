<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="procesoEdad2.php" method="post">
            <input type="hidden" id="nombre" name="nombre" value="<?php echo $strNombre ?>">
            <input type="hidden" id="apellido" name="apellido" value="<?php echo $strApellido ?>">
            <font size=6 color="brown" face="Lucida Calligraphy">Hombre </font>
            <input required type="radio" id="opcion1" name="opcion" value="hombre" style="width:30px;height:30px">
            <br><br>
            <font size=6 color="red" face="Lucida Calligraphy">Mujer </font>
            <input required type="radio" id="opcion2" name="opcion" value="mujer" style="width:30px;height:30px">
            <br><br>
            <input type="submit" name="genero" value="Enviar">
        </form>
    </body>
</html>
