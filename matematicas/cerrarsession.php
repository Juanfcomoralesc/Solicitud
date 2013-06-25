<?php
session_start();
session_destroy();
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.3.js"></script>
	<script src="js/tms_presets.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
	<script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/FF-cash.js"></script>
    <script>
		$(window).load(function(){
			$('.slider')._TMS({
			prevBu:'.prev',
			nextBu:'.next',
			pauseOnHover:true,
			pagNums:false,
			duration:800,
			easing:'easeOutQuad',
			preset:'Fade',
			slideshow:7000,
			pagination:'.pagination',
			waitBannerAnimation:false,
			banners:'fade'
			})
		}) 	
    </script>
	
</head>
<body>
<div class="main">
	<div class="bg-img"></div>


    <header>
        <h1><a href="index.html">Colegiados<strong>UABC'FCA</strong></a></h1>
        <nav>
        	<div class="social-icons">
            	<a href="#" class="icon-2"></a>
            	<a href="#" class="icon-1"></a>
            </div>
            <ul class="menu">
     
                <li class="current"><a href="http://fca.mxl.uabc.mx/colegiados/">Inicio</a></li>
                <li><a href="indexm.html">Matematicas</a></li>
				<li><a href="http://fca.mxl.uabc.mx/colegiados/contabilidad/indexc.html">Contabilidad</a></li>
            </ul>
        </nav>
    </header>   




   <section id="content"><div class="ic"><div class="inner_copy">All <a href="http://www.magentothemesworld.com" title="Best Magento Templates">premium Magento themes</a> at magentothemesworld.com!</div></div>
        <div class="container_12">
          <div class="grid_12">
            <div class="slider">
              <ul class="items">
                 <li><img src="images/slider-1.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Bienvenido<span>a la pagina</span></p>
                        <p class="font-2">Ya te registraste para hacer tu examen ? Si no lo has hecho inicia sesion con tu matricula y registrate</p>
                      
                    </div>
                </li>
                <li><img src="images/slider-2.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Recuerda<span> es muy importante!</span></p>
                        <p class="font-2">Llevar el material necesario para aplicar tu examen.</p>
                     
                    </div>
                </li>
                <li><img src="images/slider-3.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Para mas<span>Informacion</span></p>
                        <p class="font-2">Envianos un correo a fca.mxl1@gmail.com</p>
                    </div>
                </li>
              </ul>
              <div class="pagination">
                  <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
              </div>  
            </div>
          </div>	
         
          <div class="grid_12 top-1">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-1">
                    	<h2 class="p3"><span class="color-1">Evaluacion</span> colegiada</h2>
                        <div class="wrap box-1">
                            <img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Periodo de solicitud abierto</strong> </p>
                                <p>El periodo de solicitud se encuentra abierto, recuerda el periodo de registro es del 1 mayo hasta el 15 de mayo. Es importante de presentarse en la fecha, hora y lugar de evaluaci&oacute;n agregando con <a rel="nofollow" href="" class="link">10 minutos de anticipaci&oacute;n.<a> </p>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-2">
                        <h2 class="p3"><span class="color-1">Puntos </span> Importantes</h2>
                        <ul class="list-1">
						    <li><a href="#">Llegar con 10 minutos antes de la hora de inicio de evaluaci&oacute;n.</a></li>
                        	<li><a href="#">No se permitir&aacute;, ni se har&aacute; re agenda.</a></li>
                            <li><a href="#">No se permitir&aacute;, el acceso a las salas despu&eacute;s de 5 minutos de la hora indicada en su comprobante de registro.</a></li>

                        </ul>
                        
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 

    <footer>
        <p>&reg; 2012 UABC FCA COLEGIADOS</p>
        <p><a rel="nofollow" href="" class="link" target="_blank">Universidad Aut&oacute;noma de Baja California</a> by Coordinaci&oacute;n de Evaluaci&oacute;n colegiada</p>
    </footer>	
</div>    
<script>
	Cufon.now();
</script>
</body>
</html>





<?php

echo "

<html>
<head>
<meta http-equiv='REFRESH' content='0 ; url=../index.html'>
<script>
alert('Session terminada! Gracias por tu visita');
</script>

</head>
</html>


";


?>



