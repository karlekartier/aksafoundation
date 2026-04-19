
(function ($) {
  "use strict";

  $(document).ready(function () {
    // NAVBAR TOGGLE LOGIC
    const toggleIcon = $("#toggleIcon");
    const navbarCollapse = $("#navbarNav");

    if (navbarCollapse.length && toggleIcon.length) {
      navbarCollapse.on("shown.bs.collapse", function () {
        // Menu opened — show 'x' icon
        toggleIcon.attr("src", "assets/images/icons/x.webp");
        toggleIcon.attr("alt", "Close Menu");
      });

      navbarCollapse.on("hidden.bs.collapse", function () {
        // Menu closed — show grid icon
        toggleIcon.attr("src", "assets/images/home/grid.webp");
        toggleIcon.attr("alt", "Open Menu");
      });
    }

    // OWL CAROUSEL INITIALIZATION
    if ($(".owl-carousel").length) {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        items: 1,
        nav: true,
        dots: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 5,
          },
        },
      });
    }

    // TOAST LOGIC
    if ($(".toast").length) {
      $(".toast").toast({
        delay: 3000,
      });
      $(".toast").toast("show");
    }

    // COUNTER NUMBERS
    if (jQuery(".counter-thumb").length) {
      jQuery(".counter-thumb").appear(function () {
        jQuery(".counter-number").countTo();
      });
    }
  });

  // CUSTOM LINK (Smooth scroll)
  $(".smoothscroll").click(function () {
    var el = $(this).attr("href");
    var elWrapped = $(el);
    var header_height = $(".navbar").height();

    scrollToDiv(elWrapped, header_height);
    return false;

    function scrollToDiv(element, navheight) {
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop - navheight;

      $("body,html").animate(
        {
          scrollTop: totalScroll,
        },
        300
      );
    }
  });
})(window.jQuery);


