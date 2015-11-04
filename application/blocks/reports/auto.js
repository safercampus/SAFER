ccmValidateBlockForm = function() {
	
	if ($('#field_1_image_fID-fm-value').val() == '' || $('#field_1_image_fID-fm-value').val() == 0) {
		ccm_addError('Missing required image: report-logo');
	}

	if ($('#field_2_textbox_text').val() == '') {
		ccm_addError('Missing required text: report-url');
	}


	return false;
}
