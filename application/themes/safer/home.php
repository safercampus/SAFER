<?= $view->inc('elements/header.php'); ?>

    <div class="jumbotron">
      <div class="container">
        <h1 class="big-safer">safer</h1>
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
      <div class="row main-blurbs-container">
        <div class="col-md-4 main-sections">
          <?php
              $a = new Area('Homepage The Basics Blurb');
              $a->display($c);
          ?>
        </div>

        <div class="col-md-4 main-sections">
          <?php
              $a = new Area('Homepage Policy Blurb');
              $a->display($c);
          ?>
       </div>

        <div class="col-md-4 main-sections">
          <?php
              $a = new Area('Homepage Activism Blurb');
              $a->display($c);
          ?>
        </div>
      </div>
    </div>

<?= $view->inc('elements/footer.php'); ?>
