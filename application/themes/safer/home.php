<?= $view->inc('elements/header.php'); ?>

    <div class="jumbotron">
      <div class="container">
        <?php
            $a = new Area('Homepage Header');
            $a->display($c);
        ?>
        <div class="row">
          <div class="col-md-9">
            <?php
                $a = new Area('Homepage Header Blurb');
                $a->display($c);
            ?>
          </div>
          <div class="col-md-3">
            <br>
            <p><a class="btn btn-primary btn-lg" role="button" href="teach_in">Request a teach-in</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 main-sections">
          <h2>The Basics</h2>
          <?php
              $a = new Area('Homepage The Basics Blurb');
              $a->display($c);
          ?>
          <br>
          <p><a class="btn btn-primary" href="basics" role="button">Learn more</a></p>
        </div>
        <div class="col-md-4 main-sections">
          <h2>Policy</h2>
          <?php
              $a = new Area('Homepage Policy Blurb');
              $a->display($c);
          ?>
          <br>
          <p><a class="btn btn-primary" href="policy" role="button">Learn more</a></p>
       </div>
        <div class="col-md-4 main-sections">
          <h2>Activism</h2>
          <?php
              $a = new Area('Homepage Activism Blurb');
              $a->display($c);
          ?>
          <p><a class="btn btn-primary" href="activism" role="button">Learn more</a></p>
        </div>
      </div>
    </div>

<?= $view->inc('elements/footer.php'); ?>
