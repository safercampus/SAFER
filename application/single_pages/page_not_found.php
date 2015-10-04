<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?= $view->inc('elements/header.php'); ?>

<div class="error-page-container">
  <?php
      $a = new Area('Content section');
      $a->display($c);
  ?>
</div>

<?= $view->inc('elements/footer.php'); ?>