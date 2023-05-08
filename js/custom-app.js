jQuery(document).ready(function ($) {

	/*====== STICKY NAV ======*/

	var window_scrolltop;
	var clone_navigation = $(".header-main-nav").clone().addClass("sticky");
	var clone_search = $(".blog-search .dropdown").clone();
	var clone_sidebar_nav_menu = $(".sidebar-navigation-menu").clone();

	if($("#wpadminbar").length>0){
		$("body").addClass("wpadminbar-open");
	}

	$("body").append(clone_navigation);
	$(".header-main-nav.sticky .main-nav-wrapper .main-menu").append(clone_search);
	$(".header-main-nav.sticky .main-nav-wrapper .main-menu").append(clone_sidebar_nav_menu);


	/*====== FEATURED POSTS ======*/
	
	$('.featured-container').each(function(){

	    $('.featured-posts.colum-5').slick({
	    	autoplay:true,
	    	autoplaySpeed:4500,
			dots: true,
			infinite: true,
			slidesToShow: 5,
			slidesToScroll: 5,
			prevArrow: $('.sl-prev'),
			nextArrow: $('.sl-next'),
			responsive: [
			    {
			      breakpoint: 1198,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 4,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 990,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 767,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        infinite: true,
			        dots: true
			      }
			    }
			  ]
		});

	    $('.featured-posts.colum-4').slick({
	    	autoplay:true,
	    	autoplaySpeed:4500,
			dots: true,
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			prevArrow: $('.sl-prev'),
			nextArrow: $('.sl-next'),
			responsive: [
			    {
			      breakpoint: 1198,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 990,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 767,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        infinite: true,
			        dots: true
			      }
			    }
			  ]
		});

	    $('.featured-posts.colum-3').slick({
	    	autoplay:true,
	    	autoplaySpeed:4500,
			dots: true,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			prevArrow: $('.sl-prev'),
			nextArrow: $('.sl-next'),
			responsive: [
			    {
			      breakpoint: 1198,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 990,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 767,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        infinite: true,
			        dots: true
			      }
			    }
			  ]
		});

	    $('.featured-post .featured-post-content .featured-post-meta .post-entry').each(function(){
    		var featuredtextheight = $(this).outerHeight();
	    	$(this).css('marginBottom', '-' + featuredtextheight + 'px');
	    });

		var varWidth = ($('.slick-dots').outerWidth()*1)+20;
	    $('.sl-prev').css('marginRight', varWidth);

	});


	/*====== MOST POPULAR POST POSTS ======*/
	
	$('.most-popular-posts').each(function(){

	    $('.most-popular-posts').slick({
	    	autoplay:true,
	    	autoplaySpeed:4000,
			dots: false,
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
			    {
			      breakpoint: 1198,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true
			      }
			    },
			    {
			      breakpoint: 990,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true
			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        infinite: true
			      }
			    },
			  ]
		});

	});

	/*====== SLIDER POST ======*/
	$('.post-type-slider').each(function(){

		$('.post-type-slider').flexslider({
			animation: "slide",
			controlNav: false,
			directionNav: true
		});

	});

	/*====== GALLERY POST ======*/
	$('.post-type-gallery').each(function(){

		$(".post-type-gallery").justifiedGallery({
			rowHeight: 200,
			fixedHeight: false,
			margins: 2,
			lastRow: 'nojustify',
			captions : false,
		});

	});

	/*====== SIDEBAR NAVIGATION ======*/
	
		var clone_sidebar_logo = $("header .header-top .brand-logo h1").clone();
		var clone_copyright_text = $("footer .footer-bottom p.copyright").clone();


		$(".sidebar-nav-header").append(clone_sidebar_logo);
		$(".sidebar-navigation .sidebar-nav-scroll .sidebar-nav-content .sidebar-nav-footer").append(clone_copyright_text);

		$("body").on("click",".sidebar-navigation-menu", function(e){
	    	$("html").addClass("sidebar-navigation-menu-open");
	    	$(".sidebar-navigation, .wrapper").addClass("open");

			e.stopPropagation();
	    	e.preventDefault();
	    });

	    $("body").on("click",".sidebar-close-btn", function(e){
			$("html").removeClass("sidebar-navigation-menu-open");
			$(".sidebar-navigation, .wrapper").removeClass("open");
			
	    	e.preventDefault();
	    });

		$(".secondary-menu > li.menu-item-has-children > a").on('click', function(e) {
		    e.preventDefault();
		    var $this = $(this);
		    if ($this.hasClass("expanded")) {
		        $this.removeClass("expanded");
		    } else {
		        $(".secondary-menu li.menu-item-has-children a.expanded").removeClass("expanded");
		        $this.addClass("expanded");
		        $(".secondary-menu .sub-menu").filter(":visible").slideUp(170);
		    }
		    $this.parent().children("ul").stop(true, true).slideToggle(170);
		});
		
	    var $sidebarNavScroll = new IScroll('#custom-scroll', { mouseWheel: true });
		document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
	

	/*====== BACK TO TOP ======*/

	$('.back-to-top-page').each(function(){
		$('.back-to-top').on('click', function(event) {

			event.preventDefault();
			$('html, body').animate({scrollTop: 0}, 1500);

		return false;
		});
	});




	/*====== FOOTER INSTAGRAM  ======*/

	var resizeFooterInstangram = function(){

		var mainHeight = $('footer > .footer-instagram > ul').find('li:eq(0)').outerHeight();

		var elStyle = $('<style/>').attr('data-for', 'change-before');

		var contentStyle = 'footer .footer-instagram:before{';

		contentStyle += 'height: '+mainHeight+'px !important;';

		contentStyle += '}';

		elStyle.html(contentStyle);

		$('footer').find('style[data-for="change-before"]').remove();
		$('footer > *:eq(0)').before(elStyle);

	}

	$(window).load(function(){
		resizeFooterInstangram();

		$(window).resize(function(){

			resizeFooterInstangram();

		});
	});

});