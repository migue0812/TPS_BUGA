<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="procesoEdad3.php" method="post">
       Blusa:
            <select id="blusa" name="blusa"> 
                <option value="seleccion1"> Seleccione </option> 
                <option value="cescote"> Con escote </option> 
                <option value="sescote"> Sin Escote </option> 
                <option value="otra"> Otra </option> 
            </select>
            <br>
            Pantalón: 
            <select id="pantalonM" name="pantalonM">
                <option value="seleccion2"> Seleccione </option> 
                <option value="ptela"> Tela </option> 
                <option value="fmediana"> Falda Mediana </option> 
                <option value="otro"> Otro </option> 
            </select>
            <br>
            Zapatos:
            <select id="zapatosM" name="zapatosM">
                <option value="seleccion3"> Seleccione </option> 
                <option value="scerrado"> Serio cerrado </option> 
                <option value="tacones"> Tacones </option> 
                <option value="otro"> Otro </option>
            </select>
            <br><br><br>
            <input type="submit" value="Enviar" style="width:150px; height:60px; background-color: #E17407; color: #054B04; font-size: 25pt">
        </form>
    </body>
</html>
