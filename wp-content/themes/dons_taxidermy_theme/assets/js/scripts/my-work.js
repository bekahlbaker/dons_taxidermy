+function ($) {
    'use strict';


// $(function() {
//     $('img').matchHeight();
// });
    
$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
});

}(jQuery);
