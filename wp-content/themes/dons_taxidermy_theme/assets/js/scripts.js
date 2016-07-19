+function ($) {
    'use strict';

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

}(jQuery);
;+function ($) {
    'use strict';
    
$('.dropdown').hide();

$( "#mobile" ).click(function() {
  $( ".dropdown" ).toggle(function() {
  });
});

$(".menu-item").click(function() {
	$(".dropdown").hide();
});

var stickyOffset = $('.sticky').offset().top;

$(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= stickyOffset) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});

}(jQuery);
;+function ($) {
    'use strict';

$(function() {
		$('#price').on('click', function() {
			$('#priceModal').modal('show');   
		});		
});  

$('.title').hide();

$('.one').hover(function() {
	$(this).children('.title').slideDown();
}, function() {
	$(this).children('.title').slideUp();
});

}(jQuery);
;+function ($) {
    'use strict';
    
}(jQuery);
