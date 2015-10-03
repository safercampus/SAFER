ccmValidateBlockForm = function() {
	
	if ($('#field_1_textbox_text').val() == '') {
		ccm_addError('Missing required text: Image Address');
	}

	if ($('#field_2_textbox_text').val() == '') {
		ccm_addError('Missing required text: Link Address');
	}

	if ($('#field_4_textbox_text').val() == '') {
		ccm_addError('Missing required text: Button Text');
	}


	return false;
}
