/*-----------------------------------------------------------------------------------*/
/* Preloader & Initialize Masonry Script
/*-----------------------------------------------------------------------------------*/

$('.ajaxloading').fadeIn(500);
$(window).load(function(){ 
    $('.ajaxloading').fadeOut(500);
});

$(window).load(function(){ 
    $(".slideshowpreload").fadeOut('slow');     
});

/*-----------------------------------------------------------------------------------*/
/*  Ajax Load Post
/*-----------------------------------------------------------------------------------*/

$(document).ready(function(){
    $.ajaxSetup({cache:false});

    /* Declare Variables */
    var ajaxportfoliocontainer = jQuery('#ajaxportfoliocontainer');
    var url = jQuery('#ajaxinner').attr('data-url') + 'ajax.php'; /* Set the post ID from the outer container */
    var $postId = null; 
    var $nextitem = null;
    var $nextId = null; 
    var $prevId = null; 
    var $this = null;
    var $state = 'closed';
    var $page = 1;
    var $showElementNumber = 18;
    var $sortElementNumber = $('#featured_portfolio_container .thumbnails li').length;
    
    generate_pager($sortElementNumber, $showElementNumber, 1)
    
    $('li.portfolio-item').hide();
    $('li.portfolio-item:lt(' + $showElementNumber + ')').each(function(){
        $(this).addClass('visible').show();
    });
    
    
    /*Set Function Variables */       
    $this = $(this);
    $postId = $($this).attr('id');
    $nextitem = $($this).closest('.portfolio-item.visible').next('.portfolio-item.visible').find('a');
    $previtem = $($this).closest('.portfolio-item.visible').prev('.portfolio-item.visible').find('a');
    $prevId = $(this).closest('.portfolio-item.visible').prev('.portfolio-item.visible').find('a').attr('id');
    $nextId = $(this).closest('.portfolio-item.visible').next('.portfolio-item.visible').find('a').attr('id');

    $('#featured_portfolio_container ul.thumbnails a').live('click', function(e){e.preventDefault();
       $this_id = $(this).attr('id');
       $('#loadingcontainer').show();
       /*Set Function Variables */       
        $this = $(this);
        $postId = $($this).attr('id');
        $nextitem = $($this).closest('.portfolio-item.visible').next('.portfolio-item.visible').find('a');
        $previtem = $($this).closest('.portfolio-item.visible').prev('.portfolio-item.visible').find('a');
        $prevId = $(this).closest('.portfolio-item.visible').prev('.portfolio-item.visible').find('a').attr('id');
        $nextId = $(this).closest('.portfolio-item.visible').next('.portfolio-item.visible').find('a').attr('id');

        $('.ajaxloading').fadeIn(500);
        
        
        if ( $.browser.msie && $.browser.version == '7.0') {            
            $('html,body').parent().animate({scrollTop: $('#loadingcontainer').offset().top}, 2000, 'easeOutCubic');  
        } else {
            $('html,body').animate({scrollTop: $('#loadingcontainer').offset().top}, 2000, 'easeOutCubic');  
        }
        if ($state !== 'closed'){ 
        $('#ajaxcontainer').animate({height: "toggle"}, 500, 'easeOutCubic');
        }
        
        $('.portfolio-container').hide();
        $('#portfolio-container-' + $postId).show();
        
        ajaxportfoliocontainer.load(url, {
                id: $postId
             }, 
        function() {

            if ($state == 'closed'){   

                $('#ajaxcontainer').animate({height: "toggle"}, 500, 'easeOutCubic');

                /* If there's a previous */
                if(typeof $prevId  == 'string') {
                            $('a.prev-port').css('display', 'block');
                } else {
                    $('a.prev-port').css('display', 'none');
                } 

                /* If there's a Next*/
                if(typeof $nextId  == 'string') {
                    $('a.next-port').css('display', 'block');
                } else {
                    $('a.next-port').css('display', 'none');
                }

                $state = 'open';

            } else {

                $('#ajaxcontainer').animate({height: "toggle"}, 500, 'easeOutCubic');

                /* If there's a previous */
                if(typeof $prevId  == 'string') {
                    $('a.prev-port').css('display', 'block');
                } else {
                    $('a.prev-port').css('display', 'none');
                } 

                /* If there's a Next*/
                if(typeof $nextId  == 'string') {
                    $('a.next-port').css('display', 'block');
                } else {
                    $('a.next-port').css('display', 'none');
                }
         }

               $('.ajaxloading').fadeOut(500);
            }
        ); 

        return false;

    });
    
    /*  Next portfolio item */
    $('a.next-port').live('click', function(e){e.preventDefault();
    
        if(typeof $nextId  == 'string') {

            $('.ajaxloading').fadeIn(500);
            $('#ajaxcontainer').animate({height: "toggle"}, 500, 'easeOutCubic');

                    ajaxportfoliocontainer.load(url, {id: $nextId}, 
                    function() {

                        $this = $nextitem;
                        $postId = $nextId;
                        $previtem = $($this).closest('.portfolio-item.visible').prev('.portfolio-item.visible').find('a');  //  Static method
                        $nextitem = $($this).closest('.portfolio-item.visible').next('.portfolio-item.visible').find('a');  //  Static method
                        $prevId = $($this).closest('.portfolio-item.visible').prev('.portfolio-item.visible').find('a').attr('id');
                        $nextId = $($this).closest('.portfolio-item.visible').next('.portfolio-item.visible').find('a').attr('id');
                        
                        $('.portfolio-container').hide();
                        $('#portfolio-container-' + $postId).show();
                        
                        /* If there's a Next*/
                        if(typeof $nextId  == 'string') {
                            $('a.next-port').css('display', 'block');
                        } else {
                            $('a.next-port').css('display', 'none');
                        }
                        if(typeof $prevId  == 'string') {
                            $('a.prev-port').css('display', 'block');
                        } else {
                            $('a.prev-port').css('display', 'none');
                        }

                        $('#ajaxcontainer').animate({height: "toggle"}, 500, 'easeOutCubic');
                        $('.ajaxloading').fadeOut(500);

                });     
        } 

    });

    /*  Previous portfolio item */
    $('a.prev-port').live('click', function(e){e.preventDefault();

        if(typeof $prevId  == 'string') {

                $('.ajaxloading').fadeIn(500);
                $('#ajaxcontainer').animate({height: "toggle"}, 500, 'easeOutCubic');

                    ajaxportfoliocontainer.load(url, {id: $prevId},
                    function() {

                        $this = $previtem;
                        $postId = $prevId;
                        $previtem = $($this).closest('.portfolio-item.visible').prev('.portfolio-item.visible').find('a');
                        $nextitem = $($this).closest('.portfolio-item.visible').next('.portfolio-item.visible').find('a');
                        $prevId = $($this).closest('.portfolio-item.visible').prev('.portfolio-item.visible').find('a').attr('id');
                        $nextId = $($this).closest('.portfolio-item.visible').next('.portfolio-item.visible').find('a').attr('id');
                        
                        $('.portfolio-container').hide();
                        $('#portfolio-container-' + $postId).show();
                        
                        /* If there's a previous */
                        if(typeof $nextId  == 'string') {
                            $('a.next-port').css('display', 'block');
                        } else {
                            $('a.next-port').css('display', 'none');
                        }
                        if(typeof $prevId  == 'string') {
                            $('a.prev-port').css('display', 'block');
                        } else {
                            $('a.prev-port').css('display', 'none');
                        }

                        $('#ajaxcontainer').animate({height: "toggle"}, 500, 'easeOutCubic');
                        $('.ajaxloading').fadeOut(500);

                    });     
        }

    });
    
    $('a.portfolio-close').live('click', function(e){ 
        e.preventDefault();
        $state = 'closed'; 

        if ( $.browser.msie && $.browser.version == '7.0' ) {            
            $('html,body').parent().animate({scrollTop: $('#featured_portfolio_container').offset().top}, 2000, 'easeOutCubic'); 
        } else {
            $('html,body').animate({scrollTop: $('#featured_portfolio_container').offset().top}, 2000, 'easeOutCubic');      
        }

        $('#ajaxcontainer').animate({height: "toggle"}, 500, 'easeOutCubic', function(){        
            //  Put your action here
        });

    });
    
    /*  Pagination  */
    $('.pagination ul li.page_number a').live('click', function(){
        $('html,body').animate({scrollTop: $('#featured_portfolio_container').offset().top}, 2000, 'easeOutCubic');
        
        $('.portfolio_pager').hide();
        $('.portfolio_pager').fadeIn(1500);
        
        $('.portfolio-container').hide();        
        
        $page = $(this).html();
        $currentPage = $('.pagination ul li.active a').html();
        $pagecontainer = $('.portfolio_pager');

        $nextpage = $(this).closest('.page_number').next('.page_number').find('a:visible').html();
        $prevpage = $(this).closest('.page_number').prev('.page_number').find('a:visible').html();
        
        $fromPage = $page - 1;
        if($page == 1) {
            $showFrom = 0;
        }
        else {
            $showFrom = ($showElementNumber * $fromPage);
        }
        $sortElementNumber = $('#featured_portfolio_container .thumbnails li.visible').length;
        
        $showTo = ($showElementNumber * $page) - 1;
        
        $sortValue = $('.nav-pills li.active a').data('value');
        
        if($sortValue == "all") {
            $('li.portfolio-item').removeClass('visible').hide();
            $('li.portfolio-item').slice($showFrom, $showTo + 1).each(function(){
                $(this).addClass('visible').show();
            });
        }
        else {
            $('li.portfolio-item[data-id="' + $sortValue + '"]').removeClass('visible').hide();
            $('li.portfolio-item[data-id="' + $sortValue + '"]').slice($showFrom, $showTo + 1).each(function(){
                $(this).addClass('visible').show();
            });
        }
        
        if(typeof $nextpage == 'string') {
            $('.pagination ul li:last').removeClass('disabled');
        }
        else {
            $('.pagination ul li:last').addClass('disabled');
        }
        
        if(typeof $prevpage == 'string') {
            $('.pagination ul li:first').removeClass('disabled');
        }
        else {
            $('.pagination ul li:first').addClass('disabled');
        }
        
        $('.pagination ul li').removeClass('active');
        $(this).closest('.pagination ul li.page_number').addClass('active');
        
        return false;
    });
    
    /*  Previous page   */
    $('#prev_page').live('click', function(){
        
        if($(this).attr('class') != 'disabled') {
            $('html,body').animate({scrollTop: $('#featured_portfolio_container').offset().top}, 2000, 'easeOutCubic');
            
            $('.portfolio_pager').hide();
            $('.portfolio_pager').fadeIn(1500);
        
 
            $('.portfolio-container').hide();

            $currentPage = $('.pagination ul li.active a').html();
            $activepage = $('.pagination ul li.active a');
            $page = parseInt($currentPage) - 1;            
            $pagecontainer = $('.portfolio_pager');

            $prev = parseInt($page) - 1;
            $next = parseInt($page) + 1;
            $nextpage = $('.page_number').find('a#' + $next + ':visible').html();
            $prevpage = $('.page_number').find('a#' + $prev + ':visible').html();


            $fromPage = $page - 1;
            if($page == 1) {
                $showFrom = 0;
            }
            else {
                $showFrom = ($showElementNumber * $fromPage);
            }
            $sortElementNumber = $('#featured_portfolio_container .thumbnails li.visible').length;

            $showTo = ($showElementNumber * $page) - 1;

            $sortValue = $('.nav-pills li.active a').data('value'); 

            if($sortValue == "all") {
                $('li.portfolio-item').removeClass('visible').hide();
                $('li.portfolio-item').slice($showFrom, $showTo + 1).each(function(){
                    $(this).addClass('visible').show();
                });
            }
            else {
                $('li.portfolio-item[data-id="' + $sortValue + '"]').removeClass('visible').hide();
                $('li.portfolio-item[data-id="' + $sortValue + '"]').slice($showFrom, $showTo + 1).each(function(){
                    $(this).addClass('visible').show();
                });
            }
       

            if(typeof $nextpage == 'string') {
                $('.pagination ul li:last').removeClass('disabled');
            }
            else {
                $('.pagination ul li:last').addClass('disabled');
            }

            if(typeof $prevpage == 'string') {
                $('.pagination ul li:first').removeClass('disabled');
            }
            else {
                $('.pagination ul li:first').addClass('disabled');
            }

            $('.pagination ul li').removeClass('active');
            $activepage.closest('.pagination ul li.page_number').prev('.pagination ul li.page_number').addClass('active');
        }
        
        return false;
    });
    
    /*  Next page   */
    $('#next_page').live('click', function(){
        
        if($(this).attr('class') != 'disabled') {
            $('html,body').animate({scrollTop: $('#featured_portfolio_container').offset().top}, 2000, 'easeOutCubic');
            
            $('.portfolio_pager').hide();
            $('.portfolio_pager').fadeIn(1500);
        
            $('.portfolio-container').hide();
            
            $currentPage = $('.pagination ul li.active a').html();
            $activepage = $('.pagination ul li.active a');
            $page = parseInt($currentPage) + 1;
            $pagecontainer = $('.portfolio_pager');

            $prev = parseInt($page) - 1;
            $next = parseInt($page) + 1;
            $nextpage = $('.page_number').find('a#' + $next + ':visible').html();
            $prevpage = $('.page_number').find('a#' + $prev + ':visible').html();

            $fromPage = $page - 1;
            if($page == 1) {
                $showFrom = 0;
            }
            else {
                $showFrom = ($showElementNumber * $fromPage);
            }
            $sortElementNumber = $('#featured_portfolio_container .thumbnails li.visible').length;

            $showTo = ($showElementNumber * $page) - 1;

            $sortValue = $('.nav-pills li.active a').data('value');

            if($sortValue == "all") {
                $('li.portfolio-item').removeClass('visible').hide();
                $('li.portfolio-item').slice($showFrom, $showTo + 1).each(function(){
                    $(this).addClass('visible').show();
                });
            }
            else {
                $('li.portfolio-item[data-id="' + $sortValue + '"]').removeClass('visible').hide();
                $('li.portfolio-item[data-id="' + $sortValue + '"]').slice($showFrom, $showTo + 1).each(function(){
                    $(this).addClass('visible').show();
                });
            }

            if(typeof $nextpage == 'string') {
                $('.pagination ul li:last').removeClass('disabled');
            }
            else {
                $('.pagination ul li:last').addClass('disabled');
            }

            if(typeof $prevpage == 'string') {
                $('.pagination ul li:first').removeClass('disabled');
            }
            else {
                $('.pagination ul li:first').addClass('disabled');
            }

            $('.pagination ul li').removeClass('active');
            $activepage.closest('.pagination ul li.page_number').next('.pagination ul li.page_number').addClass('active');
        }
        
        return false;
    })
    
});

var Core = function() {
    
    this.init = function() {
        $Core = new Core();        
        $Core.portfolio_item();
        $Core.prev();
        $Core.next();
        $Core.close();
    }
    
    this.reset_all = function() {
        $(document).unbind();
    }
    
    this.portfolio_item = function() {
            $Core = new Core();
            $Core.reset_all();
            $Core.init();
            return false;     
    }
  
}
  

$(document).ready(function(){
    
    $('.nav-pills li a').live('click', function(){
        $('html,body').animate({scrollTop: $('#featured_portfolio_container').offset().top}, 2000, 'easeOutCubic');
                
        $('.portfolio-container').hide();
        
        $sortValue = $(this).data('value');
        $sortElementNumber = $('#featured_portfolio_container .thumbnails li[data-id="' + $sortValue + '"]').length;
        $currentPage = $('.pagination ul li.active a').html();
        $showElementNumber = 18;

        $pageNumber = Math.round( $sortElementNumber / $showElementNumber );
        
        $('.nav-pills li').removeClass('active');
        $(this).parent('li').addClass('active');

        if($sortValue == "all") {

            $sortElementNumber = $('#featured_portfolio_container .thumbnails li').length;
            $pageNumber = Math.round( $sortElementNumber / $showElementNumber );
            
            $('li.portfolio-item').removeClass('visible').hide();
            $('li.portfolio-item:lt(' + $showElementNumber + ')').each(function(){
                $(this).addClass('visible').fadeIn(1500);
            });
            
            $('.page_number a').show();
            $('.page_number').removeClass('active');
            $('#prev_page').addClass('disabled');

            $('.pagination ul li.page_number:first').addClass('active');
            if($pageNumber == 1) {
                $('#next_page').addClass('disabled');
            }
            else {
                $('#next_page').removeClass('disabled');
            }
 
        }
        else {
            
 
            $('#featured_portfolio_container .thumbnails li').each(function(){
                $(this).hide();
                if($(this).data('id') != $sortValue) {
                    $(this).removeClass('visible');
                }
                else {
                    $(this).addClass('visible');
                }
                
            });
 
            $('li.visible:lt(' + $showElementNumber + ')').each(function(){
                $(this).fadeIn(1500);
            });

            $('.page_number a').hide();
            $('#prev_page').addClass('disabled');
            $('.page_number:first').addClass('active');
            if($pageNumber == 1) {
                $('#next_page').addClass('disabled');
            }

            for($i=0; $i<=$pageNumber; $i++) {

                $('.page_number a[id="' + $i + '"]').show();
            }
 
        }   
        return false;
    });
     
    
});

function generate_pager($itemNumber, $itemsPerPage, $activeNumber)
{
    $pageNumber = Math.round( $itemNumber / $itemsPerPage );
    
    if($pageNumber > 1) {
        $output = '<ul>';
        $output += '<li id="prev_page" class="disabled"><a href="#">&larr;</a></li>';
          
        for($i=1; $i<=$pageNumber; $i++) {
            
            $active = "";
            $showNumber = $i;
            if($activeNumber == $showNumber) {
                $active = 'active';
            }
            else if($showNumber == 1) {
                $active = 'active';
            }
            $output += '<li class="' + $active + ' page_number"><a id="' + $showNumber + '" href="#">' + $showNumber + '</a></li>';
        }
        
        $output += '<li id="next_page"><a href="#">&rarr;</a></li></ul>';
        
        $('.pagination').append($output);
    }
    else {
        $('.sortable-pagination').hide();
    }
    
}