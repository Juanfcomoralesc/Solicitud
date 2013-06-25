<?php
session_start();
$grupo=$_SESSION['grupo'];
$matricula=$_SESSION['matricula'];
$id=$_SESSION['id'];

?> 

<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="icono.png"/>
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
						<img src="images/555.jpg" alt="" class="img-border img-indent">
                        
                        <dl>
                            <dt class="color-1"><strong>Sugerencias<br></strong></dt>
                            <dd>Para iniciar sesi&oacute;n, debes ingresar corectamente tu matricula, sin espacios, ni ceros al principio.</dd>
                         
						 
						 
					 <?php
                     session_start();
                     $grupo=$_SESSION['grupo'];
                     $matricula=$_SESSION['matricula'];
                     $id=$_SESSION['id'];




                     include "config.php";
	
	
	                 
   
                     $registros=mysql_query("select * from alumnosmate where matricula='$matricula'",$conexion) or
                     die("Problemas en el select:".mysql_error());
                     $reg=mysql_fetch_array($registros); 

                      ?> 
						 
						 
						 
						 
						 
						 
                            <dd><span>Ejemplo:</span><a href="#" class="link">101599</a></dd>
                        </dl>
                    </div>
                    <div class="col-4">
                    	<h2><span class="color-1">Solicitud </span>de evaluacion</h2>
                        <form id="form" action="5.php" method="post" >
                            <fieldset>
                              
							  
							 

							 <dt class="color-2"><strong>Informaci&oacute;n de registro:<br><br></strong></dt>
							 

							
							  
							  <?php

             include "config.php";
	
	
              $registros=mysql_query("select * from alumnosmate where matricula='$matricula'",$conexion) or
             die("Problemas en el select:".mysql_error());

           
             if ($reg=mysql_fetch_array($registros)) 
             { 
             
			 echo '<dt class="color-1"><strong>Matr&iacute;cula: </strong>'.$reg['matricula'].'</dt> 
                   <dt class="color-1"><strong>Nombre: </strong>'.$reg['nombre'].'</dt>
                   <dt class="color-1"><strong>Grupo: </strong>'.$grupo.'</dt>'; 
		    
			
		
             $regi=mysql_query("select * from turnos where grupo=".$grupo."",$conexion);
             if ($reg1=mysql_fetch_array($regi)) 
             { 
	
	              
			
			 if ($reg1['turno']=='V') 
                 { 
				  echo '<dt class="color-1"><strong>Turno: </strong>Vespertino</dt>';  echo '<br>'; 
				 } 
					
			 if ($reg1['turno']=='I') 
                 { 
							  echo '<dt class="color-1"><strong>Turno: </strong>Intermedio</dt>';  echo '<br>'; 
				 }
				 
			 if ($reg1['turno']=='M') 
                 { 
								  echo '<dt class="color-1"><strong>Turno: </strong>Matutino</dt>';  echo '<br>'; 
					
				 }				 
				 
				 
				 
		}






           
             $regi=mysql_query("select * from turnos where grupo=".$grupo."",$conexion);
  
            
             if ($reg1=mysql_fetch_array($regi)) 
        { 
	
	              
		
			 if ($reg1['turno']=='V') 
                 { 
				 echo '<dt class="color-1"><strong>Seleccione su horario de examen: </strong><br>'; 
					
                     $result = mysql_query("SELECT * FROM sessiones WHERE idsession IN(9,11,12,14,16,17) ORDER BY idsession ");   
                     echo '<select name="session">';  
                     while ($row = mysql_fetch_array($result, MYSQL_ASSOC))   
                     {   
                     echo '<option value="'.$row["idsession"].' ">'.$row["dia"].' '.$row["hora"].'</option>';   
                     }   
                     echo '</select>';  
                     mysql_free_result($result);   


				 } 
					
			 if ($reg1['turno']=='I') 
                 { 
					echo '<dt class="color-1"><strong>Seleccione su horario de examen: </strong><br>'; 
                     $result = mysql_query("SELECT * FROM sessiones WHERE idsession IN(9,14) ORDER BY idsession");   
                     echo '<select name="session">'; 
                     while ($row = mysql_fetch_array($result, MYSQL_ASSOC))   
                     {   
                     echo '<option value="'.$row["idsession"].' ">'.$row["dia"].' '.$row["hora"].'</option>';   
                     }   
                     echo '</select>'; 
                     mysql_free_result($result);  					
					
					
				 }
				 
			 if ($reg1['turno']=='M') 
                 { 
					echo '<dt class="color-1"><strong>Seleccione su horario de examen: </strong><br>'; 
                     $result = mysql_query("SELECT * FROM sessiones WHERE idsession IN(12,13,17) ORDER BY idsession");   
                     echo '<select name="session">'; 
                     while ($row = mysql_fetch_array($result, MYSQL_ASSOC))   
                     {   
                     echo '<option value="'.$row["idsession"].' ">'.$row["dia"].' '.$row["hora"].'</option>';   
                     }   
                     echo '</select>'; 
                     mysql_free_result($result);  					
					
					
				 }				 
				 
				 
				 
		}		
					
					




					
  
} 
else 
{ 
echo "

<html>
<head>
<meta http-equiv='REFRESH' content='0 ; url=indexm.html'>
<script>
alert('No ha iniciado sesion!');
</script>


</head>
</html>


";
} 
mysql_close($conexion); 
?> 
							  
				  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
                              <div class="btns"><a type="submit"  class="button" onClick="document.getElementById('form').submit()">Enviar registro</a></div>
                            </fieldset>  
                          </form> 
						  




						  

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





