+function ($) {
    'use strict';

$(function() {
		$('#price').on('click', function() {
			$('#priceModal').modal('show');   
		});		
});  

$(function() {
		$('#gallery').on('click', function() {
			$('#galleryModal').modal('show');   
		});		
}); 


}(jQuery);
