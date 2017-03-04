 // Sticky Header

 (function () {
  "use strict";

  var nav = $('.navbar');
  var scrolled = false;

  $(window).scroll(function () {

    if (100 < $(window).scrollTop() && !scrolled) {
      nav.addClass('bg-change animated');
      document.getElementById('ss-box').style.display = "none";
      scrolled = true;
    }

    if (100 > $(window).scrollTop() && scrolled) {
      nav.removeClass('bg-change animated');
      scrolled = false;
      document.getElementById('ss-box').style.display = "block";
    }
  });

}());


 jQuery(window).on('scroll', function($){
  "use strict";

  /*------------- Scroll to Top -----------------*/

  if (jQuery(this).scrollTop() > 100) {
    jQuery('#scroll-to-top').fadeIn('slow');
  } else {
    jQuery('#scroll-to-top').fadeOut('slow');
  }
});

$('#scroll-to-top').click(function(){
  "use strict";

  $("html,body").animate({ scrollTop: 0 }, 1500);
  return false;
});


 jQuery(window).load(function(){
  "use strict";
// Stellar parallax

$(window).stellar({
  horizontalScrolling: false,
  responsive: true
});

});