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

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <?php
          $a = new Area('How your donation helps');
          $a->display($c);
      ?>
    </div>

    <div class="col-md-6">
      <button class="btn btn-primary donate-toggle-btn"
          type="button"
          data-toggle="collapse"
          data-target="#donationForm"
          aria-expanded="false"
          aria-controls="donationForm">
        Donate
      </button>
      <div class="collapse" id="donationForm">
        <!-- Trail Blazer 10/02/2015 -->
        <iframe id="tbzframe"
            src="https://www.trailblz.info/SAFER/Donations.aspx?rdif=http%3a%2f%2fsafercampus.org%2fthanks-for-donating&ver=2"
            style="width:500px;height:1200px"
            frameborder="0"
            scrolling="yes"
            onload="scroll(0,0)"
            allowtransparency="true"></iframe>
        <!-- Trail Blazer 10/02/2015 -->
      </div>
      <div class="main-content">
        <?php
            $a = new Area('Content section');
            $a->display($c);
        ?>
      </div>
    </div>
  </div>
</div>

<?= $view->inc('elements/footer.php'); ?>
