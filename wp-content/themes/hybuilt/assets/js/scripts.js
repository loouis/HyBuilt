(function ($, root, undefined) {

	$(function () {


		//------------------------------------- Variables
		var $body = $("body"),
				$win = $(window),
				$winWidth = $(window).width(),
				$winHeight = $(window).height(),
				$scrollTop = $(window).scrollTop(),
				$mainNavCloseBtn = $(".main-navigation__close-btn");


		//------------------------------------- Init


		var productSticky = function(){
	    $(".prd-content__image").stick_in_parent({
	      parent: '.prd-content'
	    });
	  };


		// Magnific Popup
	  var win = $(window),
	      w,
	      currRs;

	    $('.openGallery').magnificPopup({
	      type: 'ajax',
	      closeOnBgClick: false,
	      callbacks: {
	        close: function() {
	        }
	      }
	    });

	  // $bxPager.on('click', function(e){
	  //   e.preventDefault();


		$win.scroll(function(e){
			parallaxHero();
		});

		var singleWorkHero = $('.hero__image');

		function parallaxHero(){
			var scrolled = $(window).scrollTop(),
				scrolling = scrolled*0.0215;

			singleWorkHero.css({
				'transform' : "translateY(" + (-scrolled*-0.008) + "em)"
			});
		};



		if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
	    // skrollr.init({
	    //     forceHeight: false
	    // });
		}

		$win.bind('resize load', function(){
		  if( $winWidth >= 800) {

		    // Sticky Kit
		    productSticky();

				$.scrollIt({
					topOffset: -120,
				});

		  }else{}
		});

		// Wow
		// var wow = new WOW({
		// 	mobile: false
		// });
		// wow.init();



		//------------------------------------- Navigation

		// Open navigation
		$('.main-header__hamburger').on("click", function(){
			$body.toggleClass("main-navigation--open");
		});
		// Close navigation
		$mainNavCloseBtn.on("click", function(){
			$body.removeClass("main-navigation--open")
		});



		//-------------- Fix Sub nav

		var $subNav = $(".sub-nav");

		$win.on("resize scroll", function(){
			if( $win.scrollTop() >= $winHeight-76 && $winWidth > 800 ){
				$subNav.addClass("sub-nav--fixed");
				console.log($scrollTop);
			}else{
				$subNav.removeClass("sub-nav--fixed");
			}
		});


		//-------------- Product sizes toggle

		 var $productSizesNavOpt1 = $(".product-sizes-nav a:nth-child(1)"),
		 		 $productSizesNavOpt2 = $(".product-sizes-nav a:nth-child(2)"),
				 $productItem = $(".products-prices__product");

		 $productSizesNavOpt1.on("click", function(){
			 var $this = $(this);
			 $this.parents(".products-prices__product").removeClass("opt2");
			 $this.parents(".products-prices__product").addClass("opt1");
		 });
		 $productSizesNavOpt2.on("click", function(){
			 var $this = $(this);
			 $this.parents(".products-prices__product").removeClass("opt1");
			 $this.parents(".products-prices__product").addClass("opt2");
		 });


		//------------------------------------- Shout out banners

		$(".price-beat__button").on("click", function(){
			$(".price-beat").toggleClass("price-beat--show-content")
		});

	});

})(jQuery, this);
