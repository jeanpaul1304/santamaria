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

  <style type="text/css">

  </style>
</head>
<body>



  <header>
  <div id="cabecera_v2">
    <div id="cabecera_contenido">
      
        <div id="logo">
          <img src="../imagenes/beta_logo.png">
        </div>

        <div id="menu">
          <a href="#">Inicio</a>
          <a href="#">Nosotros</a>
          <a href="#">Contáctenos</a>
        </div>
    
    </div>
  </div>  
  </header> 

  <section>
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

        <table width="100%" border="1">
          <tr>
              <td id="imgsmall" width="40%">
              <?php
                echo "<img id='imgLarge' NAME='matrix' src='large/".$Mostrar_img['img_large1']."'>";
               ?>
               </br>
                <div id='wrapper'>
                <ul class='tabs'>
                  <?php
                  
                    if ( $Mostrar['img_large1']!="no") {
                      echo "<li><a href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=4', 'cuerpocentro');\"> 
                                <img width='40px' height='40px' id='' NAME='matrix' src='large/".$Mostrar_img['img_large1']."'>
                            </a></li>";
                    }
                    if ($Mostrar['img_large2']!="no") {
                       echo "<li><a href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=5', 'cuerpocentro');\"> 
                              <img width='40px' height='40px' id='' NAME='matrix' src='large/".$Mostrar_img['img_large2']."'>
                            </a></li>";
                    }
                    if ($Mostrar['img_large3']!="no") {
                       echo "<li><a href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=5', 'cuerpocentro');\"> 
                              <img width='40px' height='40px' id='' NAME='matrix' src='large/".$Mostrar_img['img_large3']."'>
                            </a></li>";
                    }
                  
                  ?>
                  <!--<li><a href="javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=4', 'cuerpocentro');">Respiradores</a></li>
                  <li><a href="javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=5', 'cuerpocentro');">Filtros</a></li>
                  -->

                </ul>
              </div>
         
            </td> 
            <td>
              <?php
                echo $R_Mostrar_desc['desc_full'];
 
              ?>  
            </td>
          </tr>

          <tr>
            <td colspan="2" align="left">
              <?php
                echo $R_mostrar_detalle['detalles'];
 
              ?>
            </td>
          </tr>
           <tr>
               <td colspan="2" align="left">
                            <?php
                              if ($Mostrar['ficha']!="") {
                                 echo "<a target='_blank' href='fichas/".$R_mostrar_ficha['ficha']."'>Ficha Tecnica G. ".$R_mostrar_ficha['nom_producto']."</a>";
                              }
                           

                            ?>
              </td>
          </tr>

        </table>

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