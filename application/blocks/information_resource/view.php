<?php
  defined('C5_EXECUTE') or die("Access Denied.");
  $link_url = $this->controller->valid_url($field_1_link_url);
  $link_text = empty($field_1_link_text) ? $field_1_link_url : htmlentities($field_1_link_text, ENT_QUOTES, APP_CHARSET);
  $id = strtolower(str_replace(" ", "_", $field_1_link_text));
 ?>

<div class="panel panel-default information-resource-panel">
  <div class="panel-heading collapsed" role="button" data-toggle="collapse" data-target="#<?php echo $id; ?>" aria-expanded="false" aria-controls="<?php echo $id; ?>">
    <div class="panel-title">
        <span class="title"><?php echo $link_text; ?></span>
        <i class="glyphicon glyphicon-chevron-up"></i>
        <i class="glyphicon glyphicon-chevron-down"></i>
    </div>
  </div>

  <div class="panel-body collapse" id="<?php echo $id; ?>">
    <?php echo nl2br(htmlentities($field_2_textarea_text, ENT_QUOTES, APP_CHARSET)); ?>
    <br>
    <br>
    <a href="<?php echo $link_url; ?>" target="_blank">Take me to <?php echo $link_text; ?></a>
  </div>
</div>
