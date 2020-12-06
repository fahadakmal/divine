// +------------------------------------------------------------------------+
// | @author Monjur Munna
// | @author_url 1: https://imean.xyz
// | @author_url 2: https://imean.xyz
// | @author_email: imeansocial@gmail.com   
// +------------------------------------------------------------------------+
// | imean - Social Networking Website
// | Copyright (c) 2017 imean. All rights reserved.
// +------------------------------------------------------------------------+

jQuery(document).ready(function($) {
	$(document).on('click', '.delete-reply', function(event) {
		event.preventDefault();
		$("#delete-reply").attr('data-reply-ident', $(this).attr("id")).modal("show");
	});	
	
	$(document).on('click', '.delete-thread', function(event) {
		event.preventDefault();
		$("#delete-thread").attr('data-thread-ident', $(this).attr("id")).modal("show");
	});
});