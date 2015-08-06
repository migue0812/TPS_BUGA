<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <form action="procesoEdad.php" method="post">
            <font size=34 color="orange" face="Lucida Calligraphy">Edad: </font>
            <input required type="text" id="edad" name="edad" placeholder="Digite Edad" value="">
            <br>
            <font size=34 color="blue" face="Lucida Calligraphy">Nombre: </font>
            <input required type="text" id="nombre" name="nombre" placeholder="Digite Nombre" value="">
            <br>
            <font size=34 color="green" face="Lucida Calligraphy">Apellido: </font>
            <input required type="text" id="apellido" name="apellido" placeholder="Digite Apellido" value="">
             <br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
