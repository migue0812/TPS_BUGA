<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="procesoEdad4.php" method="post">
            Camisa:
            <select id="camisa" name="camisa"> 
                <option value="seleccion1"> Seleccione </option> 
                <option value="mcorta"> Seria manga corta </option> 
                <option value="mlarga"> Seria manga larga </option> 
                <option value="otra"> Otra </option> 
            </select>
            <br>
            Pantalón:
            <select id="pantalonH" name="pantalonH"> 
                <option value="seleccion2"> Seleccione </option> 
                <option value="ptela"> Tela </option> 
                <option value="otro"> Otro </option> 
            </select>
            <br>
            Zapatos: 
            <select id="zapatosH" name="zapatosH"> 
                <option value="seleccion3"> Seleccione </option> 
                <option value="zmaterial"> Material </option> 
                <option value="otro"> Otro </option> 
            </select>
            <br><br>
            <input type="submit" value="Enviar" style="width:150px; height:60px; background-color: #E17407; color: #054B04; font-size: 25pt">
        </form>
    </body>
</html>
