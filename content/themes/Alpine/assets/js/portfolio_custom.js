/* Dynamic Window Ajax Portfolio Content */
"use strict";
(function($) {

  var $actual = null;
  var obert = false;
  $(".ch-grid").click(function() {
    obre($(this).attr('id'));
    $actual = $(this);
  });
  $(".folio-btn").click(function() {
    $(".project-window").slideUp("slow");
    obert = false;
  });

  function obre(quin, dummy) {
    $.ajax({
      url : quin,
      success : function(data) {
        $('.project-content').html(data);
        $(".project-content").hide(0)
        $('.project-window').hide(0)
        tanca();
        canvia();
        worksCarousel();

        if (dummy != 1) {
          $("html, body").animate({
            scrollTop : $('#project-show').offset().top - $('#navigation').height()+1
          }, 1000, function() {
            $('.project-window').show(0);
            $('.project-window').animate({
              height : $(window).height()
            }, 500, function() {
              $('.project-window').css('height', 'auto');
              $(".project-content").fadeIn("slow");
            });
          });
        }
      }
    });
  }

  function tanca() {
    $(".btn-close").click(function() {
      $(".project-window").slideUp("slow");
      $("html, body").animate({
        scrollTop : $('#portfolio-container').offset().top -100
      }, 1000);
      obert = false;
    });
  }

  function seguent() {
    if ($actual.next().hasClass('final')) {
      $actual = $($('.inici').next());
    } else {
      $actual = $($actual.next());
    }
    if ($actual.hasClass('isotope-hidden')) {
      seguent();
    } else {
      obre($actual.attr('id'));
    }
  }

  function enrera() {
    if ($actual.prev().hasClass('inici')) {
      $actual = $($('.final').prev());
    } else {
      $actual = $($actual.prev());
    }

    if ($actual.hasClass('isotope-hidden')) {
      enrera();
    } else {
      obre($actual.attr('id'));
    }
  }

  function canvia() {
    $('.btn-next').click(function() {
      seguent();
      $(".project-window").slideUp("slow");
    });
    $('.btn-prev').click(function() {
      enrera();
      $(".project-window").slideUp("slow");
    });
  }

  // Carousel Project Opened
  function worksCarousel() {
    $(".owl-portfolio").owlCarousel({
      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      stopOnHover: true,
      autoHeight: true
    });
    $(".container").fitVids();
  }
})(jQuery); 