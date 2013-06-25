<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Colegiados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/docs.css" rel="stylesheet">
<link href="js/google-code-prettify/prettify.css" rel="stylesheet">

<link href="css/superfish.css" rel="stylesheet">
<link href="css/fluid_parallax_slideshow.css" rel="stylesheet">
<link href="css/royalslider.css" rel="stylesheet">
<link href="css/ui.totop.css" rel="stylesheet">
<link href="css/spectrum.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/jPages.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<!--[if lt IE 7]>
<link href="css/font-awesome-ie7" rel="stylesheet">
<![endif]-->

<link href="css/layout.css" rel="stylesheet">

<!--To change skin just replace default_theme.css with the one from the list below-->
<!--<link href="css/default_theme.css" rel="stylesheet">
<link href="css/theme_01.css" rel="stylesheet">
<link href="css/theme_02.css" rel="stylesheet">
<link href="css/theme_03.css" rel="stylesheet">
<link href="css/theme_04.css" rel="stylesheet">
<link href="css/theme_05.css" rel="stylesheet">
<link href="css/theme_06.css" rel="stylesheet">
<link href="css/theme_07.css" rel="stylesheet">
<link href="css/theme_08.css" rel="stylesheet">
<link href="css/theme_09.css" rel="stylesheet">-->

<!--Demo-->
<link href="css/default_theme.css" rel="stylesheet" title="style0">
<link href="css/theme_01.css" rel="alternate stylesheet" title="style1">
<link href="css/theme_02.css" rel="alternate stylesheet" title="style2">
<link href="css/theme_03.css" rel="alternate stylesheet" title="style3">
<link href="css/theme_04.css" rel="alternate stylesheet" title="style4">
<link href="css/theme_05.css" rel="alternate stylesheet" title="style5">
<link href="css/theme_06.css" rel="alternate stylesheet" title="style6">
<link href="css/theme_07.css" rel="alternate stylesheet" title="style7">
<link href="css/theme_08.css" rel="alternate stylesheet" title="style8">
<link href="css/theme_09.css" rel="alternate stylesheet" title="style9">
<!--End Demo-->


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="ico/logotop.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <div class="divider"></div>
<div class="divider"></div>
<div class="divider"></div>
<div class="divider"></div>
<div class="divider"></div>
<div class="divider"></div>
<section class="jumbotron">
    <div class="container">
        <h1>Ups! Lo sentimos!</h1>
        <p class="lead">Por el momento nos encontramos dando mantenimiento a la pagina<br> para ofrecerle un mejor servicio.</p>
        <section><p><a href="../index.html" class="btn btn-large btn-primary">Regresar a la pagina principal</a></p></section>
    </div>
</section>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<script src="js/application.js"></script>

<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="js/supersubs.js"></script>
<script> 
    $(document).ready(function() {
        $("ul.sf-menu").supersubs({ 
                speed:       'fast',
                minWidth:    12,  
                maxWidth:    27,   
                extraWidth:  1
        });
        $('ul.sf-menu').superfish({
                autoArrows: true
        });
    });
</script>

<script src="js/portfolio.js"></script>

<script src="js/modernizr.custom.04022.js"></script>

<script src="js/easing.js"></script>
<script src="js/jquery.ui.totop.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
         };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>

<script src="js/royal-slider-8.1.js"></script>
<script>
    jQuery(document).ready(function($) {               
        var banner1 = $('#banner-rotator').royalSlider({
            imageAlignCenter:true,
            imageScaleMode: "fill",
            hideArrowOnLastSlide:true,
            slideSpacing:0,
            autoScaleSlider: true,
            autoScaleSliderWidth: 1366,
            autoScaleSliderHeight: 364,
            keyboardNavEnabled: true,
            slideshowEnabled: true,
            welcomeScreenEnabled: true            
        }).data("royalSlider");                
    
        var banner2 = $('.portfolio-slider').royalSlider({
            imageAlignCenter:true,
            imageScaleMode: "fill",
            hideArrowOnLastSlide:true,
            slideSpacing:0,
            autoScaleSlider: true,
            autoScaleSliderWidth: 570,
            autoScaleSliderHeight: 424,
            keyboardNavEnabled: true,
            slideshowEnabled: true,
            welcomeScreenEnabled: true
        }).data("royalSlider");     
    });
</script>

<script src="js/jquery.fitvids.js"></script>
<script>
// Basic FitVids Test
$(".responsive-video").fitVids();
</script>

<script src="js/tinynav.js"></script>
<script>
$(function () {

  // TinyNav.js 1
  $('#nav').tinyNav({
    active: 'selected'
  });
  
  // TinyNav.js 2
  $('#nav2').tinyNav({
    header: true
  });

});
</script>

<script type="text/javascript">                                 
// we will add our javascript code here
jQuery(document).ready(function($) {

    $("#ajax-contact-form").submit(function() {
        var str = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "include/contact-process.php",
            data: str,
            success: function(msg) {
                // Message Sent? Show the 'Thank You' message and hide the form
                if(msg == 'OK') {
                    result = '<div class="notification_ok alert alert-block alert-success fade in"><button data-dismiss="alert" class="close">&times;</button>Your message has been sent. Thank you!</div>';
                    $("#fields").show();
                } else {
                    result = msg;
                }
                $('#note').html(result);
            }
        });
        return false;
    });
});
</script> 

<script src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("a[data-rel^='prettyPhoto']").prettyPhoto();
  });
</script>

<script src="js/jPages.js"></script>
<script type="text/javascript">
    /* when document is ready */
    $(function() {
        /* initiate pugin assigning the desired button labels  */
        $("div.holder-latest-work").jPages({
            containerID : "latestwork",
            perPage     : 3,
            first       : false,
            previous    : "span.arrowPrev1",
            next        : "span.arrowNext1",
            fallback    : 500,
            last        : false
        });
    });
</script>
<script type="text/javascript">
    /* when document is ready */
    $(function() {
        /* initiate pugin assigning the desired button labels  */
        $("div.holder-our-clients").jPages({
            containerID : "ourclients",
            perPage     : 6,
            first       : false,
            previous    : "span.arrowPrev2",
            next        : "span.arrowNext2",
            fallback    : 500,
            last        : false
        });
    });
</script>

<!--Demo-->
<script src="../../tab-slide-out.googlecode.com/files/jquery.tabSlideOut.v1.3.js"></script>
<script type="text/javascript">
    $(function(){
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',                     //class of the element that will become your tab
            pathToTabImage: 'images/demo_settings_tab.png', //path to the image for the tab //Optionally can be set using css
            imageHeight: '40px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '40px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'left',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                               //speed of animation
            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '100px',                          //position from the top/ use if tabLocation is left or right
            leftPos: '20px',                          //position from left/ use if tabLocation is bottom or top
            fixedPosition: true                      //options: true makes it stick(fixed position) on scroll
        });
    });
</script>
<script type="text/javascript">    
    $(function() {
        /* tooltip */
        $('*').each(function(){
            $data = $(this).data('rel');
            if($data == "tooltip") {
                $(this).tooltip();
            }
        });
        /* popover */
        $('*').each(function(){
            $data = $(this).data('rel');
            if($data == "popover") {
                $(this).popover();
            }
        });
    });
</script>
<script src="js/styleswitch.js"></script>

<!--End demo-->  </body>
</html>