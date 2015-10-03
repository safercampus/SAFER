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
              <span class="title">Donate to SAFER</span>
              <i class="glyphicon glyphicon-chevron-up"></i>
              <i class="glyphicon glyphicon-chevron-down"></i>
          </div>
        </div>

        <div class="panel-body collapse" id="donationForm">
          <!-- Trail Blazer 10/02/2015 -->
          <iframe id="tbzframe"
              src="https://www.trailblz.info/SAFER/Donations.aspx?rdif=http%3a%2f%2fsafercampus.org%2fthanks-for-donating&ver=2"
              frameborder="0"
              scrolling="yes"
              onload="scroll(0,0)"
              allowtransparency="true"></iframe>
          <!-- Trail Blazer 10/02/2015 -->
          SAFER is 501(c)3 non-profit organization, and your contribution is entirely tax-deductible. Thank you for your support!
          <br>
          <br>
          Checks should be sent to SAFER at 222 Broadway, 19th Floor, New York, NY 10038
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

<?= $view->inc('elements/footer.php'); ?>
