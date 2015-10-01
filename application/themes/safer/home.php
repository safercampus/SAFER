<?= $view->inc('elements/header.php'); ?>

    <div class="jumbotron">
      <div class="container">
        <?php
            $a = new Area('Homepage Header');
            $a->display($c);
        ?>
        <div class="row">
          <div class="col-md-12">
            <?php
                $a = new Area('Homepage Header Blurb');
                $a->display($c);
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbo-image"></div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 main-sections">
          <img class="page-logo" alt="The Basics" src="<?=$view->getThemePath()?>/img/The Basics icon.png">
          <?php
              $a = new Area('Homepage The Basics Blurb');
              $a->display($c);
          ?>
          <br>
          <p><a class="btn btn-primary" href="basics" role="button">Learn more</a></p>
        </div>
        <div class="col-md-4 main-sections">
          <img class="page-logo" alt="Policy" src="<?=$view->getThemePath()?>/img/Policy icon.png">
          <?php
              $a = new Area('Homepage Policy Blurb');
              $a->display($c);
          ?>
          <br>
          <p><a class="btn btn-primary" href="policy" role="button">Learn more</a></p>
       </div>
        <div class="col-md-4 main-sections">
          <img class="page-logo" alt="Activism" src="<?=$view->getThemePath()?>/img/Activism icon.png">
          <?php
              $a = new Area('Homepage Activism Blurb');
              $a->display($c);
          ?>
          <p><a class="btn btn-primary" href="activism" role="button">Learn more</a></p>
        </div>
      </div>
    </div>

<?= $view->inc('elements/footer.php'); ?>
