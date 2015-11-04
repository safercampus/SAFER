<?php
  defined('C5_EXECUTE') or die("Access Denied.");
  $report_url = htmlentities($field_2_textbox_text, ENT_QUOTES, APP_CHARSET);
?>

<a class="report-link" href="<?=$report_url?>" data-concrete5-link-lightbox="iframe">
  <img id="image-marker" src="<?=$field_1_image->src;?>" width="<?=$field_1_image->width;?>"></img>
</a>
