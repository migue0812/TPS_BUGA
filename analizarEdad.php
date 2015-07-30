<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="procesoAnalizarEdad.php" method="post">
            <font size=34 color="blue" face="Lucida Calligraphy">Hombre </font>
            <input required type="radio" id="opcion1" name="opcion" value="hombre" style="width:50px;height:50px">
              <br>
              <label for="inputEdadH">Edad: </label>
              <input type="number" id="inputEdadH" name="inputEdadH">
              <br>
              <label for="inputCamisa">Camisa: </label>
              <select id="camisa" name="camisa"> 
                <option value="seleccion1"> Seleccione </option> 
                <option value="mcorta"> Seria manga corta </option> 
                 <option value="mlarga"> Seria manga larga </option> 
                  <option value="otra"> Otra </option> 
                  </select>
                  <br>
              <label for="inputPantalonH">Pantalón: </label>
              <select id="pantalonH" name="pantalonH"> 
                  <option value="seleccion2"> Seleccione </option> 
                <option value="ptela"> Tela </option> 
                 <option value="otro"> Otro </option> 
            </select>
              <br>
               <label for="inputzapatosH">Zapatos: </label>
              <select id="zapatosH" name="zapatosH"> 
                  <option value="seleccion3"> Seleccione </option> 
                <option value="zmaterial"> Material </option> 
                 <option value="otro"> Otro </option> 
            </select>
               <br><br><br>
               <font size=34 color="red" face="Lucida Calligraphy">Mujer </font>
              <input required type="radio" id="opcion2" name="opcion" value="mujer" style="width:50px;height:50px">
              <br>
              <label for="inputEdadM">Edad: </label>
              <input type="number" id="inputEdadM" name="inputEdadM">
              <br>
              <label for="inputBlusa">Blusa: </label>
              <select id="blusa" name="blusa"> 
                  <option value="seleccion1"> Seleccione </option> 
                <option value="cescote"> Con escote </option> 
                 <option value="sescote"> Sin Escote </option> 
                  <option value="otra"> Otra </option> 
                  </select>
                  <br>
              <label for="inputPantalonM">Pantalón: </label>
              <select id="pantalonM" name="pantalonM">
                  <option value="seleccion2"> Seleccione </option> 
                <option value="ptela"> Tela </option> 
                 <option value="fmediana"> Falda Mediana </option> 
                 <option value="otro"> Otro </option> 
            </select>
              <br>
               <label for="inputzapatosM">Zapatos: </label>
              <select id="zapatosM" name="zapatosM">
                  <option value="seleccion3"> Seleccione </option> 
                <option value="scerrado"> Serio cerrado </option> 
                 <option value="tacones"> Tacones </option> 
                 <option value="otro"> Otro </option>
            </select>
              <br><br><br>
              <input type="submit" value="Enviar" style="width:150px; height:60px">
    </body>
</html>
