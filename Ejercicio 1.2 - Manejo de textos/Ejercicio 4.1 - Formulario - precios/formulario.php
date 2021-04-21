<link rel="stylesheet" href="formulario.css">
<section id="cajapadre">
     <div id="caja-1">
         
          <?php
          $respuesta = 0;
          $corte = 10;
          $lavado = 8;
          $peinado = 5;
          $marcaCorte = 0;
          $marcaLavado = 0;
          $marcaPeinado = 0;
          
          if(isset($_POST['submit']))
          {
             if ( !empty($_POST['corte']))  {
               $respuesta +=  $_POST['corte'];
               $marcaCorte = 1;
             }
             if (!empty($_POST['lavado'])) {
               $respuesta += $_POST['lavado'];
               $marcaLavado = 1;
             }
             if (!empty($_POST['peinado'])) {
               $respuesta +=$_POST['peinado']; 
               $marcaPeinado = 1;
             }
          }
          ?>
          <br>
          <h1>Productos de peluquería, estética y belleza profesional</h1>
          <br><br>
          <p>
               La Peluquería en la web, la tienda de peluquería online más popular de Internet.
               Porque todo cabello necesita de una atención especial, en nuestra tienda de peluquería online, te ofrecemos los mejores precios en productos de peluquería, estética y belleza con una forma rápida y segura de realizar tu compra. <br> <br>
          </p>
          <p>
               ¿Que te ofrece nuestra tienda online de productos de peluquería, estética y belleza?
               En nuestra tienda online encontrarás una gran selección de productos de peluquería y accesorios online al mejor precio.
               <br><br>
               Disponemos de una amplia gama en productos de estética y belleza para el mejor cuidado del cabello con las mejores ofertas.
               <br><br>
               Encontrarás todo un catálogo de accesorios de estética y cosmética profesional al alcance de todo el mundo, productos 100% originales a unos precios económicos.
               <br><br>
               En nuestra tienda Online encontrarás productos como Champús, cremas, mascarillas, tintes, etc.
          </p>
          <br><br>
          <div id="zonas">
               <div id="zona1">
                    <h1>Formulario de contacto</h1>
                    <br>
                    <h2 id="titulo">Peluqueria Tullio's business</h2>
                    <br>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="formulario" method="post">
                         <?php if ($marcaCorte == 0) {?>
                              <p><label >Corte </label><input type="checkbox" name="corte" value="10"></p>
                         <?php } else {?>
                              <p><label >Corte </label><input type="checkbox" name="corte" value="10" checked></p>
                         <?php }?>     
                         <?php if ($marcaLavado == 0) {?>
                              <p><label >Lavado </label><input type="checkbox" name="lavado" value="8"></p>
                         <?php } else {?>
                              <p><label >Lavado </label><input type="checkbox" name="lavado" value="8"checked></p>
                         <?php }?>     
                         <?php if ($marcaPeinado == 0) {?>
                              <p><label >Peinado </label><input type="checkbox" name="peinado" value="5"></p>
                         <?php } else {?>
                              <p><label >Peinado </label><input type="checkbox" name="peinado" value="5" checked></p>
                         <?php }?>
                         <br>
                         <p>
                              <input type="hidden" name="fotoActual" id="fotoActual" value="<?php  if(isset($_POST['fotoActual'])) echo  $_POST['fotoActual']?>">
                              <input type="hidden" name="elementoActual" id="elementoActual" value="<?php  if(isset($_POST['elementoActual'])) echo  $_POST['elementoActual']?>">
                              <input type="submit" name="reset" value="Borrar">
                              <input type="submit" name="submit" value="Enviar">  
                         </p>
                    </form>
                    <br>
                    <?php $fmt = numfmt_create( 'es_ES', NumberFormatter::CURRENCY )?>
                    <h2><?php echo "Precio Total:".numfmt_format_currency($fmt, $respuesta, "EUR")."\n"; ?></h2>
               </div>
               <div id="zona2">
                    <h1>Fotos de Peinados</h1>
                    <?php 
                         function foto($valor)
                         {
                              return(substr($valor,-3)  == 'jpg'); 
                         }
                         $camino = 'imagenes/';
                         $directorio = substr(getcwd().'/imagenes',2);
                         $ficheros1  = scandir($directorio);
                         $longitud = count($ficheros1);
                         $ficheros1 = array_filter($ficheros1, "foto");
                    ?> 
                    <select id="seleccion" onchange='elijofoto("<?php echo $camino; ?>")'>
                    <?php
                         $ruta = "";
                         for ($i=0; $i < $longitud ; $i++) {
                              if ($ficheros1[$i] != "") {
                                   echo '<option value="'.$ficheros1[$i].'">'.$ficheros1[$i].'</option>';
                                   if ($ruta == "")
                                       $ruta = $camino.$ficheros1[$i];
                              }         
                         }
                    ?>
                    </select>
                    <?php  if(isset($_POST['elementoActual'])){ ?>
                      <script>
                         document.getElementById("seleccion").selectedIndex = <?php echo $_POST['elementoActual']?>;
                      </script>
                    <?php } ?> 
                    <script>
                         console.log(!isset($_POST['fotoActual']));
                    </script>
                    <?php  if(!isset($_POST['fotoActual'])){ ?>
                         <img id="imagen" src=" <?php echo $ruta; ?> " height="200px" width="200px" alt="Foto de peinado no encontrada">
                    <?php } else { ?>
                         <script>
                              console.log("paso por aqui")
                         </script>
                         <img id="imagen" src="<?php echo $_POST['fotoActual']?>" height="200px" width="200px" alt="Foto de peinado no encontrada">
                    <?php } ?>
               </div>
          </div>
     </div>
     <script>
        var http = new XMLHttpRequest(); 

        function elijofoto(camino) {
            var x = document.getElementById("seleccion").value;
            try {
               document.getElementById("imagen").src = camino+x;
               document.getElementById("fotoActual").value = camino+x;
               document.getElementById("elementoActual").value = document.getElementById("seleccion").selectedIndex;
           } catch (error) {
               console.log("Error:",error);
            }
        }

          // if (checkFileExist(camino+x)) {
          //      document.getElementById("imagen").src = camino+x;
          //   } else {
          //      document.getElementById("imagen").alt = "Foto no encontrada";
          // }

        function checkFileExist(fichero) { 
          http.open('HEAD', fichero, false); 
          http.send(); 
          if (http.status === 200) { 
               return true;
          } else { 
               return false;
          } 
        } 
    </script>
</section>