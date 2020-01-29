/*
	$("#todoInput").val().replace(/(<([^>]+)>)/ig,"");
*/
jQuery(document).ready(function() {
	jQuery('#mip_shortcode_builder_output').click(function () {
		jQuery(this).select();
	});
	jQuery('#mip_shortcode_builder_form').submit(function (event) {
		event.preventDefault();
		var shortcode = '[menu_in_post_menu menu=' + jQuery('#mip_menu').val();
		if (jQuery('#mip_container').val() == '0') {
			shortcode += ' container="false"';
		}
		if (jQuery('#mip_container_id').val() != '') {
			shortcode += ' container_id="' + mip_clean_id(jQuery('#mip_container_id').val()) + '"';
		}
		if (jQuery('#mip_container_class').val() != '') {
			shortcode += ' container_class="' + mip_clean_class(jQuery('#mip_container_class').val()) + '"';
		}
		if (jQuery('#mip_menu_id').val() != '') {
			shortcode += ' menu_id="' + mip_clean_id(jQuery('#mip_menu_id').val()) + '"';
		}
		if (jQuery('#mip_menu_class').val() != '') {
			shortcode += ' menu_class="' + mip_clean_class(jQuery('#mip_menu_class').val()) + '"';
		}
		if (jQuery('#mip_depth').val() > 0) {
			shortcode += ' depth=' + jQuery('#mip_depth').val();
		}
		shortcode += ' style="' + jQuery('#mip_style').val() + '"';
		shortcode += ']';
		jQuery('#mip_shortcode_builder_output').val(shortcode);
	});
});

function mip_clean_id(val) {
	var cleanval = val.replace(/(<([^>]+)>)/ig, '').replace(/ |\.|\(|\)|\'|\"/g,'').trim();
	return cleanval;
}

function mip_clean_class(val) {
	var cleanval = val.replace(/(<([^>]+)>)/ig, '').replace(/\.|\(|\)|\'|\"/g,'').trim();
	return cleanval;
}