// +------------------------------------------------------------------------+
// | @author Deen Doughouz (DoughouzForest)
// | @author_url 1: http://www.imean.com
// | @author_url 2: http://codecanyon.net/user/doughouzforest
// | @author_email: imeansocial@gmail.com   
// +------------------------------------------------------------------------+
// | imean - The Ultimate Social Networking Platform
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