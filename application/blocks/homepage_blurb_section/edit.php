<?php defined('C5_EXECUTE') or die("Access Denied.");
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>Image Address</h2>
	<?php echo $form->text('field_1_textbox_text', $field_1_textbox_text, array('style' => 'width: 95%;')); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Link Address</h2>
	<?php echo $form->text('field_2_textbox_text', $field_2_textbox_text, array('style' => 'width: 95%;')); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Blurb Content</h2>
	<?php print Core::make('editor')->outputStandardEditor('field_3_wysiwyg_content'); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Button Text</h2>
	<?php echo $form->text('field_4_textbox_text', $field_4_textbox_text, array('style' => 'width: 95%;')); ?>
</div>


