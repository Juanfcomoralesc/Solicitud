<?php
session_start();
$grupo=$_SESSION['grupo'];
$matricula=$_SESSION['matricula'];
$id=$_SESSION['id'];
?> 
     

	 
	 
	 
	 
	 <!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="icono.png"/>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	top: 203px;
	left: 116px;
}
</style>
<head>
<title>Colegiados Uabc</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
	<script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/FF-cash.js"></script>
	
</head>
<body>
<div class="main">
	<div class="bg-img"></div>

   <header>
        <h1><a href="">Colegiados<strong>UABC'FCA</strong></a></h1>
        <nav>
        	<div class="social-icons">
            	<a href="#" class="icon-2"></a>
            	<a href="#" class="icon-1"></a>
            </div>
            <ul class="menu">
     
         
                <li class="current"><a href="cerrarsession.php">Cerrar sesion</a></li>
            </ul>
        </nav>
    </header>   

    <section id="content"><div class="ic"><div class="inner_copy">All <a href="http://www.magentothemesworld.com" title="Best Magento Templates">premium Magento themes</a> at magentothemesworld.com!</div></div>
        <div class="container_12">
          <div class="grid_12">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-3">
                    	<h2><span class="color-1">Colegiados</span> uabc</h2>
						<img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                        
                        <dl>
                            <dt class="color-1"><strong>Sugerencias<br></strong></dt>
                            <dd>Para obtener m&aacute;s informaci&oacute;n, env&iacute;enos un correo electr&oacute;nico a:</dd>
                         <a href="fca.mxl1@gmail.com" class="link">fca.mxl1@gmail.com</a></dd>
                        </dl>
                    </div>
                    <div class="col-4">
                    	
                       
	 
	 
	 
	 
	 
	 

     <?php



 include "config.php";
		            
					

     
     include "config.php";
	
	
	 $verificaregistro=mysql_query("select * from regmate where matricula='$matricula'",$conexion) or
     die("Problemas en el select:".mysql_error());
	
     
     if ($reg=mysql_fetch_array($verificaregistro)) 
     { 
	  
	 
	
	
	 echo '<h2><span class="color-1">Ups!</span> lo sentimos</h2><br><br>'; 
     echo "<center>";
     echo '<h2><span class="color-1">Ya se encuentra registrada en nuestra base la matricula </span>'.$matricula.'</h2>'; 
	 
	    
  
      echo ' <div id="apDiv1"><br>
   <div class="btns"><a type="submit"  class="button" value="Imprimir" href="generar.php">Generar Registro</a></div></div>';  
	 
	 
	 
	 
	
     }
	   
	   
	else
	 { 
	 
	 
	 
	 
	                $result22 = mysql_query("SELECT * FROM regmate where session='$_REQUEST[session]'", $conexion);
                    $num_rows = mysql_num_rows($result22);
	 				if ($num_rows>=111) 
                    { 
					echo "

                    <html>
                    <head>
                    <meta http-equiv='REFRESH' content='0 ; url=4.php'>
                    <script>
                    alert('Lo sentimos, se ha agotado la solicitud para este horario, seleccione uno nuevo!');
                    </script>
                    </head>
                    </html>
                    ";
					}else{
	 
	 
	 
			       
  $result = mysql_query("SELECT * FROM regmate WHERE session='".$_REQUEST["session"]."'", $conexion)or
             die("Problemas en el select:".mysql_error());
	
	    
                     

                    $num_rows = mysql_num_rows($result);

                    if ($num_rows>=0 and $num_rows<=27) 
                    { 
					
					//echo "Laboratorio 1"; echo " ";
					//echo "Numero de Maquina: "; echo $num_rows;
					$lab="1";
					
					$maq=$num_rows+1;
					$lugar='Laboratorio 1 / Numero de Maquina '.$maq;
					}
					
					
				
				    if ($num_rows>=28 and $num_rows<=55) 
                    { 
					//echo "Laboratorio 2"; echo "<br>";
					//echo "Numero de Maquina: "; echo $num_rows-29;
					$lab="2";
					$maq=$num_rows-27;
					$lugar='Laboratorio 2 / Numero de Maquina '.$maq;
					}
					
			        if ($num_rows>=56 and $num_rows<=83) 
                    { 
					//echo "Laboratorio 3"; echo "<br>";
					//echo "Numero de Maquina: "; echo $num_rows-57;
					$lab="3";
					$maq=$num_rows-55;
					$lugar='Laboratorio 3 / Numero de Maquina '.$maq;
					}
					
					if ($num_rows>=84 and $num_rows<=111) 
                    { 
					//echo "Laboratorio 4"; echo "<br>";
					//echo "Numero de Maquina: "; echo $num_rows-86;
         			$lab="4";
					$maq=$num_rows-83;
					$lugar='Laboratorio 4 / Numero de Maquina '.$maq;
					}
                 
					
					
					
			
					
				
			         $ses=$_POST['session']; 
                     $sql=mysql_query("select * from sessiones where idsession='$ses'"); 
                     $rs = mysql_fetch_assoc($sql); 
                     $dia=$rs["dia"]; 
					 $hora=$rs["hora"];

					 
               
       
         $registros=mysql_query("select * from alumnosmate where matricula='$matricula'",$conexion) or
         die("Problemas en el select:".mysql_error());
	
	    
         if ($reg=mysql_fetch_array($registros)) 
         { 
      
         $matricula=$reg['matricula'];
         $nombre=$reg['nombre'];
  
		 
		 
		 $H=date('H:i:s');
		 $F=date('Y-m-d');
       
		 
		 
  		    	 mysql_query("insert into regmate(matricula,nombre,grupo,laboratorio,maquina,session,fechasolicitud) values ('$matricula','$nombre','$grupo','$lab','$maq','$_REQUEST[session]','$F')",
                 $conexion) or die("Problemas en el select".mysql_error());
                 mysql_close($conexion);
               
         

        	
		 
         echo '<h2><span class="color-1">Registro </span>exitoso!</h2>
         <br>
		 Se ha realizado el registro exitosamente, para presentar el examen ser&aacute; necesario imprimir esta p&aacute;gina y presentarla<a href="#" class="link"> de lo contrario no podr&aacute; ingresar a las salas de evaluaci&oacute;n</a>
         <br>
		 <br>
         <html>
         <head>

         <style type="text/css">
         .s {
        	font-family: Tahoma, Geneva, sans-serif;
         }
         .a {
	     font-weight: bold;
         }
         </style>
         </head>

         <body>
         <table width="578" border="0">
         <tr>
         <td height="31" colspan="2" bgcolor="#000000">&nbsp;</td>
         </tr>
         <tr>
         <td width="242" class="a"><span class="s">&nbsp;Matr&iacutecula</span></td>
         <td width="314"><span class="s">'.$matricula.'</span></td>
         </tr>
         <tr>
         <td bgcolor="#9DE4FF" class="a"><span class="s">&nbsp;Nombre</span></td>
        <td bgcolor="#9DE4FF"><span class="s">'.$nombre.'</span></td>
         </tr>
		 <tr>
         <td width="242" class="a"><span class="s">&nbsp;Grupo</span></td>
         <td width="314"><span class="s">'.$grupo.'</span></td>
         </tr>
         <tr>
         <td width="242" bgcolor="#9DE4FF" class="a"><span class="s">&nbsp;Laboratorio</span></td>
        <td width="314" bgcolor="#9DE4FF"><span class="s">'.$lab.'</span></td>
         </tr>
         <tr>
         <td bgcolor="#FFFFFF" class="a"><span class="s">&nbsp;Maquina</span></td>
          <td bgcolor="#FFFFFF"><span class="s">'.$maq.'</span></td>
         </tr>
         <tr>
         <td bgcolor="#9DE4FF" class="a"><span class="s">&nbsp;D&iacutea</span></td>
         <td bgcolor="#9DE4FF"><span class="s">'.$dia.'</span></td>
         </tr>
         <tr>
         <td bgcolor="#FFFFFF" class="a"><span class="s">&nbsp;Horario</span></td>
         <td bgcolor="#FFFFFF"><span class="s">'.$hora.'</span></td>
         </tr>
         </table>
         </body>
         </html>';
       

                             echo ' <div class="btns"><a type="submit"  class="button" value="Imprimir" href="generar.php">Generar Registro</a></div>';

		}
         
  
  
  
  
  
    } 
 	
  
  }
  
  
  
  
  ?>

                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 

     <footer>
        <p>&copy; 2012 UABC FCA COLEGIADOS</p>
        <p><a rel="nofollow" href="" class="link" target="_blank">Universidad Aut&oacute;noma de Baja California</a> by Coordinaci&oacute;n de Evaluaci&oacute;n colegiada</p>
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>





