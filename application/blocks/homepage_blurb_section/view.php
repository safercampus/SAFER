<?php
  defined('C5_EXECUTE') or die("Access Denied.");

  $img_address = htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET);
  $link_address = htmlentities($field_2_textbox_text, ENT_QUOTES, APP_CHARSET);
  $blurb_content = $field_3_wysiwyg_content;
  $button_text = htmlentities($field_4_textbox_text, ENT_QUOTES, APP_CHARSET);
?>

<a href="<?=$link_address?>">
  <img class="page-logo" src="<?=$view->getThemePath()?><?=$img_address?>">
</a>
<?=$blurb_content?>
<div class="button-container">
  <a class="btn btn-primary" href="<?=$link_address?>" role="button">
    <?=$button_text?>
  </a>
</div>
