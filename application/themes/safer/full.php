<?= $view->inc('elements/header.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 main-content full">
      <?php
          $a = new Area('Content section');
          $a->display($c);
      ?>
    </div>
  </div>
</div>

<?= $view->inc('elements/footer.php'); ?>
