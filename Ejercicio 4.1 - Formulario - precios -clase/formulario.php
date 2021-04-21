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
          var_dump($_POST);
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
          </p>
          <br><br>
          <div id="cuerpo">
               <div id="izquierda">
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
               <div id="derecha">
                    <p>Fotos de Peluqueria, elija modelo</p>
                    <?php 
                        function foto($valor)
                        {
                             return(substr($valor,-3)  == 'jpg'); 
                        }
                        $camino = 'imagenes/';
                        $directorio = getcwd().'/imagenes';
                        $ficheros1  = scandir($directorio);
                        $ficheros1 = array_filter($ficheros1, "foto");
                        $primeraFoto = "";
                    ?>
                    <select name="fotos" id="fotos" onchange='cargafoto("<?php echo $camino; ?>")'>
                         <?php 
                              foreach ($ficheros1 as &$valor){
                                        if ($valor != "") {
                                             echo '<option value="'.$valor.'">'.strstr($valor,".",true).'</option>';
                                             if ($primeraFoto == "")
                                                  $primeraFoto = $valor;
                                        }
                              }
                              unset($valor);
                        ?> 
                    </select>
                    <img id="imagen" src="<?php echo $camino.$primeraFoto ?>" alt="">
               </div>
          </div>
          <?php 
               // Resetea Formulario 
               if(isset($_POST['reset']))
                 header("Location:index.php")
          ?> 
     </div>
</section>