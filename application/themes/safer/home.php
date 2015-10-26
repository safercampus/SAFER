<?= $view->inc('elements/header.php'); ?>

    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span class="big-safer">safer</span>
            <?php
                $a = new Area('Homepage Header');
                $a->display($c);
            ?>
          </div>
        </div>
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
        <div class="col-md-3 main-sections">
          <?php
              $a = new Area('Homepage The Basics Blurb');
              $a->display($c);
          ?>
        </div>

        <div class="col-md-3 main-sections">
          <?php
              $a = new Area('Homepage Policy Blurb');
              $a->display($c);
          ?>
       </div>

        <div class="col-md-3 main-sections">
          <?php
              $a = new Area('Homepage Activism Blurb');
              $a->display($c);
          ?>
        </div>

        <div class="col-md-3 main-sections">
          <?php
              $a = new Area('Homepage Teach-In Blurb');
              $a->display($c);
          ?>
        </div>
      </div>
    </div>

<script type="text/javascript">
  // Adds rollover effect to homepage blurb images.
  $(document).ready(function () {
    $(".main-blurbs-container img.page-logo").hover(
      function() {
        var src = $(this).attr('src');
        $(this).attr('src', src.replace(".png", "-rollover.png"));
      }, function() {
        var src = $(this).attr('src');
        $(this).attr('src', src.replace("-rollover.png", ".png"));
      }
    );
  });
</script>
<?= $view->inc('elements/footer.php'); ?>
