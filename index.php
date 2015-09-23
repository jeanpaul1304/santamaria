<?php 
session_start();

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


	<header class="row">
		<div class="header-ctn">
			<div class="logo">
				<a href="">
					<img src="static/img/Logo_v2.png" width="270">
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
					<img src="static/img/twitter.png" width="17px">
				</a>
				<a href="javascript:;">
					<img src="static/img/facebook.png" width="8px">
				</a>
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
						<a href="javascript:;" class="more-banner">Ver más información</a>
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
						<a href="javascript:;" class="more-banner">Ver más información</a>
					</div>
				</li>						
			</ul>
		</div>

		<div id="cuerpo">
			<div id='contenido'>
				<div id='contenido_menu'>
					<section class='products-categories'>
						<ul class='categories'>
							<?php 
							require('servicio/conexion.php');
							$query = "SELECT id,nombre,imagen
							FROM tb_area ";      
							$Resultado=mysqli_query($con,$query);
							while($MostrarFila=mysqli_fetch_array($Resultado)){
								echo "
								<li class='category'>
									<div href='javascript:;' class='ctn-cat'>
										<img src='imagenes/".$MostrarFila['imagen']."'>
										<div class='cat-title'>
											<ul class='sub-categories'>
												<li class='title'>
													".$MostrarFila['nombre']."
													<img src='static/img/bgbottom.png'>
												</li>";
												$query2 = "SELECT id_categoria,nom_categoria
												FROM tb_categoria WHERE id_area=".$MostrarFila['id']."";      
												$Resultado2=mysqli_query($con,$query2);
												while($MostrarFila2=mysqli_fetch_array($Resultado2)){

													echo "<li><a href='seguridadindustrial/producto.php?id_categoria=".$MostrarFila2['id_categoria']."&id_subcategoria=0'> ".$MostrarFila2['nom_categoria']."</a></li>";

												}

												echo "</ul>
											</div>
										</div>
									</li>";
								}
								?>
<!-- GASES INDUSTRIALES -->								
								<li class="category">
									<div href="javascript:;" class="ctn-cat">
										<img class="imagen_menu" src="imagenes/autogeno2.png">
										<div class="cat-title">
											<ul class="sub-categories">
												<li class="title">
													Gases Industriales
													<img src="static/img/bgbottom.png">
												</li>
												<li><a href="javascript:;">Elemento 1</a></li>
												<li><a href="javascript:;">Elemento 1</a></li>
												<li><a href="javascript:;">Elemento 1</a></li>
												<li><a href="javascript:;">Elemento 1</a></li>
												<li><a href="javascript:;">Elemento 1</a></li>
												<li><a href="javascript:;">Elemento 1</a></li>
												<li><a href="javascript:;">Elemento 1</a></li>
												<li><a href="javascript:;">Elemento 1</a></li>
											</ul>
										</div>
									</div>
								</li>
<!--ABRASIVO-->
								<li class="category">
									<div href="javascript:;" class="ctn-cat">
										<img class="imagen_menu" src="imagenes/abrasivos2.png">
										<div class="cat-title">
											<ul class="sub-categories">
												<li class="title">
													Abrasivos
													<img src="static/img/bgbottom.png">
												</li>
												<li><a href="javascript:;">Discos</a></li>
												<li><a href="javascript:;">Pidra de esmeril</a></li>
												<li><a href="javascript:;">Lijas</a></li>
												<li><a href="javascript:;">Puntas montadas</a></li>
												<li><a href="javascript:;">Escobillas de Mmquinas</a></li>
												<li><a href="javascript:;">Escobillas de mano</a></li>
											</ul>
										</div>
									</div>
								</li>
<!-- SOLDADURA ELECTRICA -->
								<li class="category">
									<div href="javascript:;" class="ctn-cat">
										<img class="imagen_menu" src="imagenes/soldadura_electrica.png">
										<div class="cat-title">
											<ul class="sub-categories">
												<li class="title">
													Soldadura Electrica
													<img src="static/img/bgbottom.png">
												</li>
												<li><a href="javascript:;">Electrodos</a></li>
												<li><a href="javascript:;">Porta electrodos y tenazas</a></li>
												<li><a href="javascript:;">Accesorios</a></li>
											</ul>
										</div>
									</div>
								</li>

							</ul>	
						</section>
					</div>
				</div>
			</div>


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
/*
			echo '
				<li class="category">

					<div href="javascript:;" class="ctn-cat">
						<img src="http://lorempixel.com/245/245/">
						<div class="cat-title">
							<img src="static/img/bgbottom.png">
							</div>
							<ul class="sub-categories">
								<li class="title">';
			echo $MostrarFila["nombre"];
			echo '</li>';
			echo $item_submenu;
			echo '</ul></div></a></li>';*/

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


			<footer >
				<div class="ctn-footer">
					<div class="rights">
						&#169; All rights reserved | developed by&nbsp;<a href="http://w3layouts.com/"> luis Lopez</a>
					</div>
					<ul>
						<li><a href="javascript:;">Inicio</a></li>
						<li><a href="javascript:;">Nosotros</a></li>
						<li><a href="javascript:;">Contactenos</a></li>
					</ul>
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