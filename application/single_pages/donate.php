<?= $view->inc('elements/header.php'); ?>

<div class="header-section">
  <div class="container">
    <div class="row">
      <div class="col-md-11 col-md-offset-1">
        <?php
            $a = new Area('Title section');
            $a->display($c);
        ?>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 donate-column">
      <div class="panel panel-default">
        <div class="panel-heading collapsed" role="button" data-toggle="collapse" data-target="#donationForm" aria-expanded="false" aria-controls="donationForm">
          <div class="panel-title">
            <?php
              $a = new Area('Donation Form Panel Title');
              $a->display($c);
            ?>
            <i class="glyphicon glyphicon-chevron-up"></i>
            <i class="glyphicon glyphicon-chevron-down"></i>
          </div>
        </div>

        <div class="panel-body collapse" id="donationForm">
          <!-- Trail Blazer 10/02/2015 -->
          <?php
              $a = new Area('Content Above Donation Form');
              $a->display($c);
          ?>
          <iframe id="tbzframe"
              src="https://www.trailblz.info/SAFER/Donations.aspx?rdif=http%3a%2f%2fsafercampus.org%2fthanks-for-donating&ver=2"
              frameborder="0"
              scrolling="yes"
              onload="scroll(0,0)"
              allowtransparency="true"></iframe>
          <!-- Trail Blazer 10/02/2015 -->
          <?php
              $a = new Area('Content Below Donation Form');
              $a->display($c);
          ?>
        </div>
      </div>
    </div>

    <div class="col-md-8 main-content">
      <?php
          $a = new Area('How your donation helps');
          $a->display($c);
      ?>
    </div>
  </div>
</div>
<script type="text/javascript">
  // Default expand the donation form for large screens.
  if ($(window).width() >= 992) {
    $('#donationForm').addClass('in');
    $('#donationForm').collapse('show');
  }
</script>

<?= $view->inc('elements/footer.php'); ?>
