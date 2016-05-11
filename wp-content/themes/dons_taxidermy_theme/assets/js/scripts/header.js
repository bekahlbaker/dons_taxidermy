+function ($) {
    'use strict';
    
$('.dropdown').hide();

$( "#mobile" ).click(function() {
  $( ".dropdown" ).toggle(function() {
    // Animation complete.
  });
});

var stickyOffset = $('.sticky').offset().top;

$(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= stickyOffset) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});

}(jQuery);
