<?php if (!isset($_SESSION)) {
   session_start();
}
$_SESSION['id_categoria'] = $_SESSION['id_cate']; 


  require('../servicio/conexion.php');
  $query = "SELECT id,nom_producto, desc_mini,img_large1,img_large2,img_large3,img_small1,img_small2,detalles,desc_full,ficha
  FROM tb_seguridad_industrial WHERE id=".$_GET['id_product']."";

  $R=mysqli_query($con,$query);
  $Mostrar=mysqli_fetch_array($R);


  $R_desc=mysqli_query($con,$query);
  $R_Mostrar_desc=mysqli_fetch_array($R_desc);

  $R_detalle=mysqli_query($con,$query);
  $R_mostrar_detalle=mysqli_fetch_array($R_detalle);

  $R_pdf=mysqli_query($con,$query);
  $R_mostrar_ficha=mysqli_fetch_array($R_pdf);

  $R_imgLarge=mysqli_query($con,$query);
  $Mostrar_img=mysqli_fetch_array($R_imgLarge);

  $R_imgLarge1=mysqli_query($con,$query);
  $R_imgSmall1=mysqli_query($con,$query);$R_imgSmall1_768=mysqli_query($con,$query);

  $R_imgLarge2=mysqli_query($con,$query);
  $R_imgSmall2=mysqli_query($con,$query);$R_imgSmall2_768=mysqli_query($con,$query);

 
 $R_desc_responsive=mysqli_query($con,$query);
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<title>Industria Comercial Santa MAria</title>
	<link rel="stylesheet" type="text/css" href="../style/style2.css">
	<link rel="stylesheet" type="text/css" href="../style/menu.css">
  <link rel="stylesheet" type="text/css" href="../static/css/main.css">

	<style type="text/css">

	</style>
</head>
<body class="body-product">
<!--<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>-->


  <header class="row">
    <div class="header-ctn">
      <div class="logo">
        <a href="../index.php">
          <img src="../static/img/Logo_v2.png" width="270">
        </a> 
      </div>
      <div class="search-box">
        <input type="text" placeholder="Buscar...">
      </div>
      <div class="header-menu">
        <a href="#">Inicio</a>
        <a href="#">Nosotros</a>
        <a href="#">Contáctenos</a>
        <a href="javascript:;">
          <img src="../static/img/twitter.png" width="17px">
        </a>
        <a href="javascript:;">
          <img src="../static/img/facebook.png" width="8px">
        </a>
      </div>
    </div>
  </header> 

	<section class="section-product">
		<div id="cuerpo">
			<div id="cuerpo_lateral">
			 	<ul class="tag_nav list-unstyled">
		            <h3>Seguridad Industrial</h3>
		            <li><a href="producto.php?id_categoria=1&id_subcategoria=4" title="Inicio"> Respiratorio</a></li>
		            <li><a href="producto.php?id_categoria=7&id_subcategoria"> Auditiva</a></li>
		            <li><a href="producto.php?id_categoria=4&id_subcategoria"> Visual</a></li>
		            <li><a href="producto.php?id_categoria=3&id_subcategoria=0"> Manos</a></li>
		            <li><a href="producto.php?id_categoria=2&id_subcategoria"> Calzado</a></li>
		            <li><a href="producto.php?id_categoria=5&id_subcategoria"> Cabeza</a></li>
		            <li><a href="producto.php?id_categoria=6&id_subcategoria"> Facial</a></li>
		            <li><a href="#">Trafico Reflectivos y Señalizaciones</a></li>
          		</ul>
        	</div>
		
        
			<div id="cuerpo_centro">
        <div class="miniaturas_widget">
          <div class="img-mini-ctn">
            <!--<img src="http://lorempixel.com/200/200">-->
             <?php
                echo "<img id='imgLarge' NAME='matrix' src='large/".$Mostrar_img['img_large1']."'>";
               ?>
          </div>
          <h2>
              <?php 
                  require('../servicio/conexion.php');
                  $query = "SELECT id,nom_producto
                  FROM tb_seguridad_industrial Where id=".$_GET['id_product']."";
                  $Resultado=mysqli_query($con,$query);
                  $MostrarFila=mysqli_fetch_array($Resultado);
                  echo $MostrarFila['nom_producto'];
                  ?>
          </h2>
          <ul class="miniaturas">
            

            <?php
               if ( $Mostrar['img_large1']!=NULL) {
                      echo "<li class='active'>
                              <a href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=4', 'cuerpocentro');\"> 
                                <img width='40px' height='40px' id='' NAME='matrix' src='large/".$Mostrar_img['img_large1']."'>
                              </a>
                            </li>";
                }
              ?>      
    
        
              <!--<img src="http://lorempixel.com/200/200" width="40" height="40">-->
            <?php
               if ( $Mostrar['img_large2']!=NULL) {
                      echo "<li>
                              <a href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=4', 'cuerpocentro');\"> 
                                <img width='40px' height='40px' id='' NAME='matrix' src='large/".$Mostrar_img['img_large2']."'>
                              </a>
                            </li>";
                }
              ?>      


              <!--<img src="http://lorempixel.com/200/200" width="40" height="40">-->
                  <?php
                     if ($Mostrar['img_large3']!=NULL) {

                       echo "<li><a href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=5', 'cuerpocentro');\"> 
                              <img width='40px' height='40px' id='' NAME='matrix' src='large/".$Mostrar_img['img_large3']."'>
                            </a></li>";
                    }
                    ?>
                  
           
            <li>
              <img src="http://lorempixel.com/200/200" width="40" height="40">
            </li>
          </li>
        </div>

        <div class="product-info">
          <h2>
                <?php 
                  require('../servicio/conexion.php');
                  $query = "SELECT id_categoria,nom_categoria
                  FROM tb_categoria Where id_categoria=".$_SESSION['id_categoria']."";
                  $Resultado=mysqli_query($con,$query);
                  $MostrarFila=mysqli_fetch_array($Resultado);
                  echo $MostrarFila['nom_categoria'];
                  ?> 
          </h2>
          <!--<ul>
            <li>Diseño clásico y ergonomico</li>
            <li>Fabricada en material de nylon reforzado y antiflama</li>
            <li>Alta resistencia al calor y chispas incandescentes</li>
            <li>Visor levantable con luna de cristal de 2 x 4 ¼”</li>
            <li>Clip de adaptador universal para adaptar al casco procedencia:taiwan</li>
            <li>Norma ANZI Z87</li>
          </ul>-->
          <ul>
            <?php
                echo $R_mostrar_detalle['detalles'];
 
              ?>
          </ul>
          <div class="ctn-buttons">
            <div class="fic-tec">
              <a href="javascript:;">
                <img src="../static/img/bg-download.png">
              </a>
              <p>Descargar <br> Ficha Tecnica</p>
            </div>
            <div class="share">
              <p>Compartir <br> este producto:</p>
              <div class="social-btns">
                <a href="javascript:;" class="twitter">
                  <img src="../static/img/share-twitter.png">
                </a>
                <a href="javascript:;" class="Facebook">
                  <img src="../static/img/share-facebook.png">
                </a>
              </div>
            </div>
          </div>
        </div>
			</div>

		</div>
		<div class="navigator-detail">
      <h3>TAMBIEN PUEDES COMPRAR:</h3>
      <div id="cuerpo_contenido">
        <div id="modulo_r"> 
          <a href="descripcion.php?id_product=1"><table width="100%" border="0" cellspacing="0"><tbody><tr> <td id="des1" align="center">  <img class="imagenes_Seguridad" src="large/78-483-large.jpg"> </td>      </tr> <tr>   <td id="des1" align="center" valign="middle">  <h3>SUPER FLEX</h3>   </td>   </tr></tbody></table></a> </div>  <div id="modulo_r"> 
          <a href="descripcion.php?id_product=2"><table width="100%" border="0" cellspacing="0"><tbody><tr> <td id="des1" align="center">  <img class="imagenes_Seguridad" src="large/hilo-large.jpg"> </td>      </tr> <tr>   <td id="des1" align="center" valign="middle">  <h3>HILO</h3>   </td>   </tr></tbody></table></a> </div>  <div id="modulo_r"> 
          <a href="descripcion.php?id_product=3"><table width="100%" border="0" cellspacing="0"><tbody><tr> <td id="des1" align="center">  <img class="imagenes_Seguridad" src="large/split-large.jpg"> </td>      </tr> <tr>   <td id="des1" align="center" valign="middle">  <h3>SPLIT</h3>   </td>   </tr></tbody></table></a> </div>  <div id="modulo_r"> 
          <a href="descripcion.php?id_product=4"><table width="100%" border="0" cellspacing="0"><tbody><tr> <td id="des1" align="center">  <img class="imagenes_Seguridad" src="large/super flex nylon-large.jpg"> </td>      </tr> <tr>   <td id="des1" align="center" valign="middle">  <h3>SUPER FLEX NYLON</h3>   </td>   </tr></tbody></table></a> </div>  <div id="modulo_r"> 
          <a href="descripcion.php?id_product=5"><table width="100%" border="0" cellspacing="0"><tbody><tr> <td id="des1" align="center">  <img class="imagenes_Seguridad" src="large/viper-large.jpg"> </td>      </tr> <tr>   <td id="des1" align="center" valign="middle">  <h3>VIPER</h3>   </td>   </tr></tbody></table></a> </div>  <div id="modulo_r"> 
          <a href="descripcion.php?id_product=15"><table width="100%" border="0" cellspacing="0"><tbody><tr> <td id="des1" align="center">  <img class="imagenes_Seguridad" src="large/ve730-venitex.jpg"> </td>      </tr> <tr>   <td id="des1" align="center" valign="middle">  <h3>VENITEX 730</h3>   </td>   </tr></tbody></table></a> </div> <br>
        </div>
      </div>
    </div>

	</section>

<footer id='pie'>
	<div class="pie_contenido">
		&#169; All rights reserved | developed by&nbsp;<a href="http://w3layouts.com/"> luis Lopez</a>


	</div>

</footer>	

 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <script type="text/javascript" src="ajax.js"></script> 
 <script type="text/javascript">
    function llamarasincrono (url, id_contenedor)
    {
        var pagina_requerida = false;
        if (window.XMLHttpRequest)
        {
            // Si es Mozilla, Safari etc
            pagina_requerida = new XMLHttpRequest ();
        } else if (window.ActiveXObject)
        {
            // pero si es IE
            try
            {
                pagina_requerida = new ActiveXObject ("Msxml2.XMLHTTP");
            }
            catch (e)
            {
                // en caso que sea una versión antigua
                try
                {
                    pagina_requerida = new ActiveXObject ("Microsoft.XMLHTTP");
                }
                catch (e)
                {
                }
            }
        }
        else
        return false;
        pagina_requerida.onreadystatechange = function ()
        {
            // función de respuesta
            cargarpagina (pagina_requerida, id_contenedor);
        }
        pagina_requerida.open ('GET', url, true); // asignamos los métodos open y send
        pagina_requerida.send (null);
    }
    // todo es correcto y ha llegado el momento de poner la información requerida
    // en su sitio en la pagina xhtml
    function cargarpagina (pagina_requerida, id_contenedor)
    {
        if (pagina_requerida.readyState == 4 && (pagina_requerida.status == 200 || window.location.href.indexOf ("http") == - 1))
        document.getElementById (id_contenedor).innerHTML = pagina_requerida.responseText;
    }
  </script>	
</body>
</html>