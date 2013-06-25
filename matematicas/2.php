<?php
session_start();
$_SESSION['matricula']=$matriculabd;
$_SESSION['id']=$id;
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
	left: 3px;
	top: 178px;
}
#apDiv2 {
	position:absolute;
	width:289px;
	height:115px;
	z-index:1;
	left: 320px;
	top: 69px;
}
</style>
<head>
<title>Iniciar sesion</title>
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
     
                <li ><a href="http://localhost/colegiados">Inicio</a></li>
                <li class="current"><a href="index.html">Matematicas</a></li>
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
						<img src="images/Corbis-42-26458067.jpg" alt="" class="img-border img-indent">
                        
                        <dl>
                            <dt class="color-1"><strong>Sugerencias<br></strong></dt>
                            <dd>Para iniciar sesi&oacute;n, debes ingresar corectamente tu matricula, sin espacios, ni ceros al principio.</dd>
                         
                            <dd><span>Ejemplo:</span><a href="#" class="link">1101599</a></dd>
                        </dl>
                    </div>
                  <div class="col-4"></div>
               	  <h2><span class="color-1">Iniciar</span> Sesion</h2>
               	  <div id="apDiv2">
               	    <form id="form" action="2.php" method="post" >
               	      <fieldset>
               	        <label>
               	          <input type="text" name='matricula' value="Ingrese su Matricula" onBlur="if(this.value=='') this.value='Ingrese su Matricula'" onFocus="if(this.value =='Ingrese su Matricula' ) this.value=''">
           	            </label>
						
						<label>
               	          <input type="text" name='grupo' value="Ingrese su Grupo" onBlur="if(this.value=='') this.value='Ingrese su Grupo'" onFocus="if(this.value =='Ingrese su Grupo' ) this.value=''">
           	            </label>
               	        <div class="btns"><a type="submit"  class="button" onClick="document.getElementById('form').submit()">Iniciar Sesion</a></div>
           	          </fieldset>
           	        </form>
               	  </div>
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





<?php

$matricula=$_POST['matricula'];
$grupo=$_POST['grupo'];

if(isset($matricula) && is_numeric($matricula) && isset($grupo))
{
include "config.php";

$consulta=mysql_query("SELECT * FROM alumnosmate WHERE matricula='".$matricula."'");
$filas=mysql_fetch_array($consulta);

$consulta2=mysql_query("SELECT * FROM turnos WHERE grupo='".$grupo."'");
$filas2=mysql_fetch_array($consulta2);


$matriculabd=$filas['matricula'];
$grupobd=$filas2['grupo'];
$id=$filas['id'];



if($matricula==$matriculabd && $grupo==$grupobd){


session_start();
$_SESSION['matricula']=$matriculabd;
$_SESSION['grupo']=$grupobd;
$_SESSION['id']=$id;




echo "

<html>
<head>
<meta http-equiv='REFRESH' content='0 ; url=3.php'>
<script>
alert('Has iniciado sesion, bienvenido!');
</script>

</head>
</html>


";


}
else{

echo "

<html>
<head>
<meta http-equiv='REFRESH' content='0 ; url=index.html'>
<script>
alert('Has ingresado una matricula incorrecta, intente de nuevo!');
</script>

</head>
</html>


";

}



}
else{

echo "

<html>
<head>
<meta http-equiv='REFRESH' content='0 ; url=index.html'>
<script>
alert('Favor de ingresar su matricula!');
</script>

</head>
</html>


";



}

?>



