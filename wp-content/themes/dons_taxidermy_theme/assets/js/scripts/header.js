+function ($) {
    'use strict';
    
$('.dropdown').hide();

$( "#mobile" ).click(function() {
  $( ".dropdown" ).toggle(function() {
    // Animation complete.
  });
});

}(jQuery);
