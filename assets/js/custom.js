$(window).on('load', function () {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	} else{
		$('body').addClass('web');
	};
	$('body').removeClass('loaded'); 
});


/* ==========================================================================
   When the window is scrolled, do
   ========================================================================== */
   
	$(window).scroll(function() {		
	
		
	});

/* ==========================================================================
   When the window is resized, do
   ========================================================================== */
   
	$(window).resize(function() {
		
		
	});




/* viewport width */
function viewport(){
	var e = window, 
		a = 'inner';
	if ( !( 'innerWidth' in window ) )
	{
		a = 'client';
		e = document.documentElement || document.body;
	}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
};
/* viewport width */
$(function(){
	/* placeholder*/	   
	$('input, textarea').each(function(){
 		var placeholder = $(this).attr('placeholder');
 		$(this).focus(function(){ $(this).attr('placeholder', '');});
 		$(this).focusout(function(){			 
 			$(this).attr('placeholder', placeholder);  			
 		});
 	});
	/* placeholder*/

	$('.button-nav').click(function(){
		$(this).toggleClass('active'), 
		$('.main-nav-list').slideToggle(); 
		return false;
	});
	
	/* components */

    if($('.slick-slider').length) {
        $('.slick-slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            prevArrow: '<button type="button" class="slick-prev"></button>',
            nextArrow: '<button type="button" class="slick-next"></button>',
            slidesToShow: 1,
            slidesToScroll: 1
        });
    };

    $('.mobile-menu-toggle').on('click', function(){
        var $el = $(this);
        $el.find('.dash').toggleClass('active');
        $el.next().slideToggle();
    });




    // init Isotope
    var $grid = $('.blog-list').isotope({
        itemSelector: '.blog-item',
        layoutMode: 'fitRows',
        percentPosition: true,
    });
    // filter items on button click
    $('.tags-list').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });

        $(this).parent().addClass('active').siblings().removeClass('active');
    });

    var iso = $grid.data('isotope');
    $grid.infiniteScroll({
        checkLastPage: true,
        path: '.pagination__next a',
        hideNav: '.pagination__next',
        scrollThreshold: false,
        history: false,
        append: '.blog-item',
        button: '.load-more .btn',
        outlayer: iso,
    });


    /*

    if($('.styled').length) {
        $('.styled').styler();
    };
    if($('.fancybox').length) {
        $('.fancybox').fancybox({
            margin  : 10,
            padding  : 10
        });
    };

    if($('.scroll').length) {
        $(".scroll").mCustomScrollbar({
            axis:"x",
            theme:"dark-thin",
            autoExpandScrollbar:true,
            advanced:{autoExpandHorizontalScroll:true}
        });
    };

    */
	
	/* components */
	
	

});

var handler = function(){
	
	var height_footer = $('footer').height();	
	var height_header = $('header').height();		
	//$('.content').css({'padding-bottom':height_footer+40, 'padding-top':height_header+40});
	
	
	var viewport_wid = viewport().width;
	var viewport_height = viewport().height;
	
	if (viewport_wid <= 991) {
		
	}
	
}
$(window).bind('load', handler);
$(window).bind('resize', handler);



