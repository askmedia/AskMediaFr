var onMobile = false;
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
  onMobile = true;
}

//Page Preloader
jQuery(window).load(function() {
  jQuery("#intro-loader").delay(3000).fadeOut();
  jQuery(".mask").delay(3500).fadeOut("slow");

  //FullScreen Slider
  jQuery(function() {
    jQuery('#fullscreen-slider').maximage({
      cycleOptions : {
        fx : 'fade',
        speed : 1500,
        timeout : 6000,
        prev : '#slider_left',
        next : '#slider_right',
        pause : 500,
        before : function(last, current) {
          jQuery('.slide-content').fadeOut().animate({
            top : '190px'
          }, {
            queue : false,
            easing : 'easeOutQuad',
            duration : 550
          });
          jQuery('.slide-content').fadeOut().animate({
            top : '-190px'
          });
        },
        after : function(last, current) {
          jQuery('.slide-content').fadeIn().animate({
            top : '0'
          }, {
            queue : false,
            easing : 'easeOutQuad',
            duration : 450
          });
        }
      },
      onFirstImageLoaded : function() {
        jQuery('#cycle-loader').delay(800).hide();
        jQuery('#fullscreen-slider').delay(800).fadeIn('slow');
        jQuery('.slide-content').fadeIn().animate({
          top : '0'
        });
        
        jQuery('.slide-content a').bind('click', function(event) {
          jQuery('html, body').stop().animate({
            scrollTop : jQuery('#home').height()
          }, 1500, 'easeInOutExpo');
          event.preventDefault();
        });
        jQuery('.menu_top .slide-content a').bind('click', function(event) {
          jQuery('html, body').stop().animate({
            scrollTop : jQuery('#home').height() - jQuery('.navbar-header').height()+1
          }, 1500, 'easeInOutExpo');
          event.preventDefault();
        });
       
      }
    });

    if ((jQuery('#fullscreen-slider .mc-image').length > 1 )) {
      jQuery("#home").append('<a id="slider_left" class="fullscreen-slider-arrow"></a><a id="slider_right" class="fullscreen-slider-arrow"></a>');
    }
  });
  if (jQuery('.textbxslider li').length > 1) {
    jQuery('.textbxslider').bxSlider({
      controls : false,
      adaptiveHeight : true,
      pager : false,
      auto : true,
      mode : 'fade',
      pause : 3000,
      startSlide : 10
    });
  }
  
});

jQuery(document).ready(function() {

  
  jQuery(".owl-single").owlCarousel({
    navigation : false,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    stopOnHover : true,
    autoHeight : true
  });
  
  var owl = jQuery("#owl-client");
  owl.owlCarousel({
    items : 6,
    itemsDesktop : [1000, 5], //5 items between 1000px and 901px
    itemsDesktopSmall : [900, 3], // 3 items betweem 900px and 601px
    itemsTablet : [600, 2], //2 items between 600 and 0;
    itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
  
  
  jQuery("#navigation").sticky({
    topSpacing : 0
  });

  jQuery(".container").fitVids();

  jQuery('a.external').click(function() {
    var url = jQuery(this).attr('href');
    jQuery('.mask').fadeIn(250, function() {
      document.location.href = url;
    });
    jQuery("#intro-loader").fadeIn("slow");
    return false;
  });

  jQuery('div.collapse').on('hidden.bs.collapse', function() {
    jQuery(this).parent().find('i.accordion-icon').removeClass('fa-minus').addClass('fa-plus');
  });

  jQuery('div.collapse').on('shown.bs.collapse', function() {
    jQuery(this).parent().find('i.accordion-icon').removeClass('fa-plus').addClass('fa-minus');
  });

  // Radial progress bar
  jQuery('.cart').appear(function() {
    var easy_pie_chart = {};
    jQuery('.circular-item').removeClass("hidden");
    jQuery('.circular-pie').each(function() {
      var text_span = jQuery(this).children('span');
      jQuery(this).easyPieChart(jQuery.extend(true, {}, easy_pie_chart, {
        size : 250,
        animate : 2000,
        lineWidth : 6,
        lineCap : 'square',
        barColor : jQuery(this).data('color'),
        lineWidth : 20,
        trackColor : '#2B2925',
        scaleColor : false,
        onStep : function(value) {
          text_span.text(parseInt(value, 10) + '%');
        }
      }));
    });
  });

  // Portfolio Isotope
  var container = jQuery('#portfolio-wrap');
  container.isotope({
    animationEngine : 'best-available',
    animationOptions : {
      duration : 200,
      queue : false
    },
  });
  jQuery('#filters a').click(function() {
    jQuery('#filters a').removeClass('active');
    jQuery(this).addClass('active');
    var selector = jQuery(this).attr('data-filter');
    container.isotope({
      filter : selector
    });
    setProjects();
    return false;
  });
  function splitColumns() {
    var winWidth = jQuery(window).width() + 15, columnNumb = 1;
    if (winWidth > 1200) {
      columnNumb = 4;
    } else if (winWidth > 992) {
      columnNumb = 2;
    } else if (winWidth > 767) {
      columnNumb = 2;
    } else if (winWidth < 767) {
      columnNumb = 1;
    }
    return columnNumb;
  }

  function setColumns() {
    var winWidth = jQuery(window).width(), columnNumb = splitColumns(), postWidth = Math.floor(winWidth / columnNumb);
    container.find('.portfolio-item').each(function() {
      jQuery(this).css({
        width : postWidth + 'px'
      });
    });
  }

  function setProjects() {
    setColumns();
    container.isotope('reLayout');
  }

  container.imagesLoaded(function() {
    setColumns();
  });
  jQuery(window).bind('resize', function() {
    setProjects();
  });
  jQuery('#portfolio-wrap .portfolio-item .portfolio').each(function() {
    jQuery(this).hoverdir();
  });

  jQuery(function() {
    jQuery('.main-button').bind('click', function(event) {
      jQuery('html, body').stop().animate({
        scrollTop : jQuery('#home').height()
      }, 1500, 'easeInOutExpo');
      event.preventDefault();
    });
    jQuery('.menu_top .main-button').bind('click', function(event) {
      jQuery('html, body').stop().animate({
        scrollTop : jQuery('#home').height() - jQuery('.navbar-header').height()+1
      }, 1500, 'easeInOutExpo');
      event.preventDefault();
    });
  });

  jQuery('.menu-item a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
      var $target = jQuery(this.hash);
      $target = $target.length && $target || jQuery('[name=' + this.hash.slice(1) + ']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        jQuery('html,body').animate({
          scrollTop : targetOffset - jQuery('.navbar-header').height()+1
        }, 1500, 'easeInOutExpo');
        return false;
      }
    }
  });

  jQuery(document).scroll(function() {
    pos = jQuery(this).scrollTop();
    jQuery(".slide-menu").each(function() {
      id_slide = jQuery(this).attr("id");
      height = jQuery(this).css("height");
      element_menu = jQuery('.navbar-nav li a[href$="#' + id_slide + '"]:first');
      if (jQuery(this).offset().top <= pos + 100 && element_menu.length > 0) {
        jQuery(".navbar-nav li").removeClass("current-menu-item");
        element_menu.parent().addClass("current-menu-item");
      }
    });
  });

  //Navigation Dropdown
  jQuery('.navbar-collapse a').click(function() {
    jQuery(".navbar-collapse").collapse("hide")
  });

  jQuery('body').on('touchstart.dropdown', '.dropdown-menu', function(e) {
    e.stopPropagation();
  });

  var onMobile = false;
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    onMobile = true;
  }

  //Back To Top
  jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() > 400) {
      jQuery("#back-top").fadeIn(200);
    } else {
      jQuery("#back-top").fadeOut(200);
    }
  });
  jQuery('#back-top, .home #brand').click(function() {
    jQuery('html, body').stop().animate({
      scrollTop : 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  if ((onMobile === false ) && (jQuery('.parallax-slider').length )) {
    skrollr.init({
      edgeStrategy : 'set',
      smoothScrolling : false,
      forceHeight : false
    });
  }
  
  
  // Number Counter
  (function() {
    var Core = {
      initialized : false,
      initialize : function() {
        if (this.initialized)
          return;
        this.initialized = true;
        this.build();
      },
      build : function() {
        this.animations();
      },
      animations : function() {
        // Count To
        jQuery(".number-counters [data-to]").each(function() {
          var $this = jQuery(this);
          $this.appear(function() {
            $this.countTo({});
          }, {
            accX : 0,
            accY : -150
          });
        });
      },
    };
    Core.initialize();
  })();
  
});

if (onMobile == false) {
  
  //Elements Appear from top
  jQuery('.item_top').each(function() {
    jQuery(this).appear(function() {
      jQuery(this).delay(150).animate({
        opacity : 1,
        top : "0px"
      }, 1000);
    });
  });

  //Elements Appear from bottom
  jQuery('.item_bottom').each(function() {
    jQuery(this).appear(function() {
      jQuery(this).delay(150).animate({
        opacity : 1,
        bottom : "0px"
      }, 1000);
    });
  });

  //Elements Appear from left
  jQuery('.item_left').each(function() {
    jQuery(this).appear(function() {
      jQuery(this).delay(150).animate({
        opacity : 1,
        left : "0px"
      }, 1000);
    });
  });

  //Elements Appear from right
  jQuery('.item_right').each(function() {
    jQuery(this).appear(function() {
      jQuery(this).delay(150).animate({
        opacity : 1,
        right : "0px"
      }, 1000);
    });
  });

  //Elements Appear in fadeIn effect
  jQuery('.item_fade_in').each(function() {
    jQuery(this).appear(function() {
      jQuery(this).delay(150).animate({
        opacity : 1,
        right : "0px"
      }, 1000);
    });
  });

}