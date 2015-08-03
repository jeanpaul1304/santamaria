<?php 
session_start();
$_SESSION['id_cate'] = 3; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<title>Industria Comercial Santa MAria</title>
	<link rel="stylesheet" type="text/css" href="style_v2.css">
	<link rel="stylesheet" type="text/css" href="main.css">

	<style type="text/css">

	</style>
</head>
<body>



	<header id="cabecera_v2">
		<div id="cabecera_contenido">
			<div id="logo">
				<img src="images/beta_logo.png">
			</div>

			<div id="menu">
				<a href="#">Inicio</a>
				<a href="#">Nosotros</a>
				<a href="#">Contáctenos</a>
			</div>
		</div>
	</header> 

	<section>
		<div id="cuerpo">
			<div id="cuerpo_lateral">
			 	<ul class="tag_nav list-unstyled">
		            <h3>Seguridad Industrial</h3>
		            <li><a href="productos.php?id_categoria=1&id_subcategoria=4" title="Inicio"> Respiratorio</a></li>
		            <li><a href="productos.php?id_categoria=7&id_subcategoria"> Auditiva</a></li>
		            <li><a href="productos.php?id_categoria=4&id_subcategoria"> Visual</a></li>
		            <li><a href="productos.php?id_categoria=3&id_subcategoria=0"> Manos</a></li>
		            <li><a href="productos.php?id_categoria=2&id_subcategoria"> Calzado</a></li>
		            <li><a href="productos.php?id_categoria=5&id_subcategoria"> Cabeza</a></li>
		            <li><a href="productos.php?id_categoria=6&id_subcategoria"> Facial</a></li>
		            <li><a href="#">Trafico Reflectivos y Señalizaciones</a></li>
          		</ul>
        	</div>
		
			<div id="cuerpo_centro">

				  	<?php 
          			 include('seguridad_industrial/paginador_productos.php');
          			?> 

			</div>

		</div>
		

	</section>

	<footer class="pie_pagina">
		<div class="pie_contenido">
			 &#169; All rights reserved | developed by&nbsp;<a href="http://w3layouts.com/"> luis Lopez</a>


		</div>
         
	</footer>	


</body>
</html>