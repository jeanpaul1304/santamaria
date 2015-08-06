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
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/menu.css">
	<link rel="stylesheet" type="text/css" href="static/css/main.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="static/js/bxslider/jquery.bxslider.min.js"></script>
	<link rel="stylesheet" type="text/css" href="static//js/bxslider/jquery.bxslider.css">
</head>
<body>



	<header>
	<div id="cabecera_v2">
		<div id="cabecera_contenido">
			
				<div id="logo">
					<img src="imagenes/beta_logo.png">
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
		<div id="banner_centro">
			<ul class="main-slider">
				<li>
					<img src="static/img/baner1.jpg" class="banner">
					<div class="banner-ctn">
						<h2>PRODUCTOS DE <br> SEGURIDAD INDUSTRIAL</h2>
						<ul>
							<li>
								<a href="javascript:;">
									<img src="imagenes/ic_chaleco.png">
									<label>Chaleco</label>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<img src="static/img/baner2.jpg"  class="banner">
					<div class="banner-ctn">	
						<h2>PRODUCTOS DE <br> SEGURIDAD INDUSTRIAL2</h2>
						<ul>
							<li>
								<a href="javascript:;">
									<img src="imagenes/ic_chaleco.png">
									<label>Chaleco</label>
								</a>
							</li>
						</ul>
					</div>
				</li>						
			</ul>
	</div>

	<div id="cuerpo">

		<div id="contenido">
			<div id="contenido_menu">
			<section class="products-categories">
					<ul class="categories">

		<?php
			require('servicio/conexion.php');
            $query = "SELECT id,nombre
            FROM tb_area ";      
            $Resultado=mysqli_query($con,$query);

		while($MostrarFila=mysqli_fetch_array($Resultado)){
			### Llenado de sub menus ···
			$query2 = "SELECT id_categoria,nom_categoria FROM tb_categoria WHERE id_area=".$MostrarFila['id']."";      
			$Resultado2=mysqli_query($con,$query2);
			$item_submenu = "";
			while($MostrarFila2=mysqli_fetch_array($Resultado2)){
				if ($MostrarFila2['id_categoria'] == 1 ) {
					$item_submenu = $item_submenu."<li><a href='seguridadindustrial/producto.php?id_categoria=".$MostrarFila2['id_categoria']."&id_subcategoria=4'>".$MostrarFila2['nom_categoria']."</a></li>";
				}
			$item_submenu = $item_submenu."<li><a href='seguridadindustrial/producto.php?id_categoria=".$MostrarFila2['id_categoria']."&id_subcategoria=0'>".$MostrarFila2['nom_categoria']."</a></li>";
			}			
			### Fin llenado de sub menus ···
			### Impresion de menus y sub menus ···
			echo '
				
						<li class="category">
							<a href="javascript:;">
								<span>
									<img src="imagenes/icn_01.png">
								</span>
								<label>
									'.$MostrarFila["nombre"].'
									<img src="imagenes/icn_arrow.png">
								</label>
							</a>
							<ul class="sub-categories">
								'.$item_submenu.'
							</ul>
						</li>
			';

			### Fin de impresion de menus y sub menus ···

			echo "<div class='moduloMenu hide'>

			<nav id='menu_gral'>
				<ul>
					<li>

						<div class='moduloMenu'>

							<table width='100%' border='0' cellspacing='5'>
								<tr>
									<td class='menuFondo1'>
										<img src='imagenes/icn_01.png'>
									</td>
									<td class='menuFondo'>
							
										<table width='100%'>
											<tr>
												<td align='left'>".
												$MostrarFila['nombre']	
												."</td>
												<td>
													<img src='imagenes/icn_arrow.png'>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
									<ul class='ulu'>";
							     $query2 = "SELECT id_categoria,nom_categoria
						            FROM tb_categoria WHERE id_area=".$MostrarFila['id']."";      
						            $Resultado2=mysqli_query($con,$query2);

								while($MostrarFila2=mysqli_fetch_array($Resultado2)){
           
           						if ($MostrarFila2['id_categoria'] == 1 ) {
           							echo "<li><a href='seguridadindustrial/producto.php?id_categoria=".$MostrarFila2['id_categoria']."&id_subcategoria=4'>".$MostrarFila2['nom_categoria']."</a></li>";
           						}
								echo "<li><a href='seguridadindustrial/producto.php?id_categoria=".$MostrarFila2['id_categoria']."&id_subcategoria=0'>".$MostrarFila2['nom_categoria']."</a></li>";

										}
						echo "</ul>
						</div>
						
		
					</li>
				</ul>
			</nav>

		</div>";
	}
	
?>  

					</ul>		
				</section>


</div>
</div>
</div>
</section>

<footer id='pie'>
	<div class="pie_contenido">
		&#169; All rights reserved | developed by&nbsp;<a href="http://w3layouts.com/"> luis Lopez</a>


	</div>

</footer>	
<script type="text/javascript">
	$(function() {
		console.log( "ready!" );
		$('.main-slider').bxSlider({
			auto: true
			});
	});
</script>

</body>
</html>