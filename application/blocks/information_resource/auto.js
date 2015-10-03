ccmValidateBlockForm = function() {
	
	if ($('input[name=field_1_link_url]').val() == '') {
		ccm_addError('Missing required URL: Resource Link');
	}

	if ($('#field_2_textarea_text').val() == '') {
		ccm_addError('Missing required text: Resource Blurb');
	}


	return false;
}
