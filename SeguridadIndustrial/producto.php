<?php 
session_start();
$_SESSION['id_cate'] = $_GET["id_categoria"]; 
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
		
        <div id='wrapper'>
          <ul class='tabs'>
            <?php
            if ($_GET["id_categoria"]==1) {
              # code...
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=4', 'cuerpo_centro');\">Respiradores y filtros </a></li>";
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=5', 'cuerpo_centro');\">Mascarillas desechables</a></li>";

            }
            if ($_GET["id_categoria"]==4) {
              # code...
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=4&id_subcategoria=8', 'cuerpo_centro');\">Lentes </a></li>";
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=4&id_subcategoria=9', 'cuerpo_centro');\">Goggles </a></li>";
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=4&id_subcategoria=10', 'cuerpo_centro');\">Accesorios </a></li>";
            }
             if ($_GET["id_categoria"]==40) {
              # code...
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=4&id_subcategoria=11', 'cuerpo_centro');\">Ropa de Trabajo</a></li>";
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=4&id_subcategoria=12', 'cuerpo_centro');\">Ropa Industrial</a></li>";
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=4&id_subcategoria=13', 'cuerpo_centro');\">Ropa Desechable</a></li>";
              echo "<li><a class='myButton' href=\"javascript:llamarasincrono('paginador_productos.php?id_categoria=4&id_subcategoria=14', 'cuerpo_centro');\">Fajas Lumbares</a></li>";
            }



            ?>
            <!--<li><a href="javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=4', 'cuerpocentro');">Respiradores</a></li>
            <li><a href="javascript:llamarasincrono('paginador_productos.php?id_categoria=1&id_subcategoria=5', 'cuerpocentro');">Filtros</a></li>
            -->

          </ul>
        </div>
			<div id="cuerpo_centro">

				  	<?php 
          			 include('paginador_productos.php');
          			?> 

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