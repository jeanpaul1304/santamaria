<?php if (!isset($_SESSION)) {
   session_start();
}
//require('../conexion.php');
require('../servicio/conexion.php');

$RegistrosAMostrar=10;
echo '<?xml version="1.0" encoding="UTF-8"?>';
            //estos valores los recibo por getallheaders(oid)
if(isset($_GET['pag'])){
    $RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
    $PagAct=$_GET['pag'];
                //caso contrario los iniciamos
}else{
    $RegistrosAEmpezar=0;
    $PagAct=1;
}
//$id_sub=$_GET['id_subcategoria'];


$query = "SELECT id,nom_producto, desc_mini,img_large1,img_large3
FROM tb_seguridad_industrial Where id_categoria=".$_SESSION['id_cate']." AND estado=1        
LIMIT $RegistrosAEmpezar, $RegistrosAMostrar";



$Resultado=mysqli_query($con,$query);


//echo "  <h3>".$_SESSION['id_cate']."</h3>"; 
//LISTAR RESPIRADORES Y FILTROS
if($_SESSION['id_cate']==1){
  
    $id_sub=$_GET['id_subcategoria'];


            $query2 = "SELECT id,nom_producto, desc_mini,img_large1,img_large3
            FROM tb_seguridad_industrial Where id_subcategoria=".$id_sub." AND estado=1        
            LIMIT $RegistrosAEmpezar, $RegistrosAMostrar";
            $Resultado2=mysqli_query($con,$query2);

           
             while($MostrarFila=mysqli_fetch_array($Resultado2)){
               //$url=pa.html;
              
          echo "<div id='modulo_r'>";  
                  echo "<table width='100%'  border='0' cellspacing='0'>";  
                 echo "<tr>";  
                  echo " <td id='des1' align='center'>";  
                 echo "  <img class='imagenes_Seguridad' src='large/".$MostrarFila['img_large1']."'>";  
                  echo " </td>     ";  
                echo " </tr>";  

                  echo " <tr>";  
                  echo "   <td id='des1' align='center' valign='middle' >";  

                  echo "  <h3>".$MostrarFila['nom_producto']."</h3>";  
                  echo "   </td>";  
                  echo "   </tr>";  
    
                 echo "</table>";    
            echo " </div>"; 

                }

            
            $NroRegistros=mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_seguridad_industrial Where id_subcategoria=".$id_sub." AND estado=1"));
            $PagAnt=$PagAct-1;
            $PagSig=$PagAct+1;
            $PagUlt=$NroRegistros/$RegistrosAMostrar;

            //verificamos residuo para ver si llevará decimales
            $Res=$NroRegistros%$RegistrosAMostrar;
            // si hay residuo usamos funcion floor para que me
            // devuelva la parte entera, SIN REDONDEAR, y le sumamos
            // una unidad para obtener la ultima pagina
            if($Res>0) $PagUlt=floor($PagUlt)+1;
            
            //desplazamiento
            echo "<br>";
            echo "<div class='paginator'>";
            echo "<a id onclick=\"Pagina('1','$id_sub')\">Primero</a> ";
            if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt','$id_sub')\">Anterior</a> ";
            echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
            if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig','$id_sub')\">Siguiente</a> ";
            echo "<a onclick=\"Pagina('$PagUlt','$id_sub')\">Ultimo</a>";

            echo "</div>";
            mysqli_free_result ($Resultado2);

          } 
 //LISTAR PROTECCION CORPORAL
          else if ($_SESSION['id_cate']==40) {

            if ($_GET['id_subcategoria']==0) {
                $id_sub=11;

            }else{
                $id_sub=$_GET['id_subcategoria'];
            }

             
            $query2 = "SELECT id,nom_producto, desc_mini,img_large1,img_large3
            FROM tb_seguridad_industrial Where id_subcategoria=".$id_sub." AND estado=1        
            LIMIT $RegistrosAEmpezar, $RegistrosAMostrar";
            $Resultado2=mysqli_query($con,$query2);

           
             while($MostrarFila=mysqli_fetch_array($Resultado2)){
               //$url=pa.html;
              
          echo "<div id='modulo_r'>";  
                  echo "<table width='100%'  border='0' cellspacing='0'>";  
                 echo "<tr>";  
                  echo " <td id='des1' align='center'>";  
                 echo "  <img class='imagenes_Seguridad' src='large/".$MostrarFila['img_large1']."'>";  
                  echo " </td>     ";  
                echo " </tr>";  

                  echo " <tr>";  
                  echo "   <td id='des1' align='center' valign='middle' >";  

                  echo "  <h3>".$MostrarFila['nom_producto']."</h3>";  
                  echo "   </td>";  
                  echo "   </tr>";  
    
                 echo "</table>";  

                echo " <div class='mascara'>";  
                    
                 echo "    <a href='descripcion.php?id_product=".$MostrarFila['id']."' class='informacion'>Ver Más</a>  ";    
                 echo "</div>";  
            echo " </div>"; 

                }

            
            $NroRegistros=mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_seguridad_industrial Where id_subcategoria=".$id_sub." AND estado=1"));
            $PagAnt=$PagAct-1;
            $PagSig=$PagAct+1;
            $PagUlt=$NroRegistros/$RegistrosAMostrar;

            //verificamos residuo para ver si llevará decimales
            $Res=$NroRegistros%$RegistrosAMostrar;
            // si hay residuo usamos funcion floor para que me
            // devuelva la parte entera, SIN REDONDEAR, y le sumamos
            // una unidad para obtener la ultima pagina
            if($Res>0) $PagUlt=floor($PagUlt)+1;
            
            //desplazamiento
            echo "<br>";
            echo "<div class='paginator'>";
            echo "<a id onclick=\"Pagina('1','$id_sub')\">Primero</a> ";
            if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt','$id_sub')\">Anterior</a> ";
            echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
            if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig','$id_sub')\">Siguiente</a> ";
            echo "<a onclick=\"Pagina('$PagUlt','$id_sub')\">Ultimo</a>";
            echo "</div>";
              mysqli_free_result ($Resultado2);
        
          }
//LISTAR PROTECCION VISUAL
          else if($_SESSION['id_cate']==4){


              if ($_GET['id_subcategoria']==0) {
                  $id_sub=8;
              }else{
                  $id_sub=$_GET['id_subcategoria'];
              }

            
            $query2 = "SELECT id,nom_producto, desc_mini,img_large1,img_large3
            FROM tb_seguridad_industrial Where id_subcategoria=".$id_sub." AND estado=1        
            LIMIT $RegistrosAEmpezar, $RegistrosAMostrar";
            $Resultado2=mysqli_query($con,$query2);

           
             while($MostrarFila=mysqli_fetch_array($Resultado2)){
               //$url=pa.html;
              
          echo "<div id='modulo_r'>";  
                  echo "<table width='100%'  border='0' cellspacing='0'>";  
                 echo "<tr>";  
                  echo " <td id='des1' align='center'>";  
                 echo "  <img class='imagenes_Seguridad' src='large/".$MostrarFila['img_large1']."'>";  
                  echo " </td>     ";  
                echo " </tr>";  

                  echo " <tr>";  
                  echo "   <td id='des1' align='center' valign='middle' >";  

                  echo "  <h3>".$MostrarFila['nom_producto']."</h3>";  
                  echo "   </td>";  
                  echo "   </tr>";  
    
                 echo "</table>";  
            echo " </div>"; 

                }

            
            $NroRegistros=mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_seguridad_industrial Where id_subcategoria=".$id_sub." AND estado=1"));
            $PagAnt=$PagAct-1;
            $PagSig=$PagAct+1;
            $PagUlt=$NroRegistros/$RegistrosAMostrar;

            //verificamos residuo para ver si llevará decimales
            $Res=$NroRegistros%$RegistrosAMostrar;
            // si hay residuo usamos funcion floor para que me
            // devuelva la parte entera, SIN REDONDEAR, y le sumamos
            // una unidad para obtener la ultima pagina
            if($Res>0) $PagUlt=floor($PagUlt)+1;
            
            //desplazamiento
            echo "<br>";
            echo "<div class='paginator'>";
            echo "<a id onclick=\"Pagina('1','$id_sub')\">Primero</a> ";
            if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt','$id_sub')\">Anterior</a> ";
            echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
            if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig','$id_sub')\">Siguiente</a> ";
            echo "<a onclick=\"Pagina('$PagUlt','$id_sub')\">Ultimo</a>";
            echo "</div>";
              mysqli_free_result ($Resultado2);
          }
          
            //LISTAR GUANTES / ZAPATOS / CASCOS
          else{   
            while($MostrarFila=mysqli_fetch_array($Resultado)){
               //$url=pa.html;


    echo " <div id='modulo_r'> 
              <a href='descripcion.php?id_product=".$MostrarFila['id']."'>";  
                  echo "<table width='100%'  border='0' cellspacing='0'>";  
                 echo "<tr>";  
                  echo " <td id='des1' align='center'>";
                 //  version estable  
                 // echo "  <img class='imagenes_Seguridad' src='large/".$MostrarFila['img_large1']."'>";  
                  echo "  <img class='imagenes_Seguridad' src='large/".$MostrarFila['img_large1']."'>";
                  echo " </td>     ";  
                echo " </tr>";  

                  echo " <tr>";  
                  echo "   <td id='des1' align='center' valign='middle' >";  

                  echo "  <h3>".$MostrarFila['nom_producto']."</h3>";  
                  echo "   </td>";  
                  echo "   </tr>";  
    
                 echo "</table>";  

               
            echo "</a> </div> ";  

                }
              
            
           
            $NroRegistros=mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_seguridad_industrial Where id_categoria=".$_SESSION['id_cate']." AND estado=1"));
            $PagAnt=$PagAct-1;
            $PagSig=$PagAct+1;
            $PagUlt=$NroRegistros/$RegistrosAMostrar;

            //verificamos residuo para ver si llevará decimales
            $Res=$NroRegistros%$RegistrosAMostrar;
            // si hay residuo usamos funcion floor para que me
            // devuelva la parte entera, SIN REDONDEAR, y le sumamos
            // una unidad para obtener la ultima pagina
            if($Res>0) $PagUlt=floor($PagUlt)+1;
            if($_SESSION['id_cate']!=1){
            //desplazamiento
            echo "<br>";
            echo "<div class='paginator'>";
            echo "<a id onclick=\"Pagina('1')\">Primero</a> ";
            if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
            echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
            if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
            echo "<a onclick=\"Pagina('$PagUlt')\">Ultimo</a>";
            echo "</div>";
             }
          }
 
                /*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
                **necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
                **programar una aplicación que tendrá muchas visitas ;) .*/
                mysqli_close($con);
            ?>