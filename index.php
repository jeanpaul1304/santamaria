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
	<link rel="stylesheet" type="text/css" href="style/main.css">
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
		
		<div id="banner">
			<div id="banner_contenido">
				<div id="banner_centro">
					
					<div id="titutlo_categoria">
						PRODUCTOS DE <br> SEGURIDAD INDUSTRIAL 
					</div>

					<div id="menus">
						<?php
						for ($i=0; $i < 10; $i++) { 
							# code...
							echo "<div class='menu1'>
							<table>
								<tr>
									<td><img class='img_cate' src='imagenes/ic_chaleco.png'></td>
								</tr>
								<tr>
									<td>Chalecos</td>
								</tr>
							</table>
						</div>";
					}
					?>


				</div>
			</div>
		</div>



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


</body>
</html>