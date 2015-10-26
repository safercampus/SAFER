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
    <div class="col-md-3" id="sidenav">
      <div class="bs-sidebar hidden-print" data-spy="affix" data-offset-top="161" data-offset-bottom="291">
        <ul class="nav bs-sidenav">
        </ul>
      </div>
    </div>

    <div class="col-md-9 main-content">
      <?php
          $a = new Area('Content section');
          $a->display($c);
      ?>
    </div>
  </div>
</div>

<script src="<?=$view->getThemePath()?>/js/toc.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // Initialize our table of contents.
    $('#sidenav ul').toc({
      headersScope: '.main-content',
      title: "",
      skipTopList: true,
      listType: 'ul',
      listClass: 'nav',
      noBackToTopLinks: true,
      minimumHeaders: 2,
      showSpeed: 0,
    });

    // Init sidebar max height and update it on page resize.
    // This allows LARGE side navs to be scrollable.
    var sidebar = $("#sidenav .bs-sidebar");
    sidebar.css("max-height", $(window).height() - 69);
    $(window).resize(function() {
      sidebar.css("max-height", $(window).height() - 69); // nav height (50) + ~20px padding
    });

    // Setup any popovers that may exist on the page.
    $('[data-toggle="popover"]').popover({"trigger": "hover", "placement": "right"});
  });
</script>

<?= $view->inc('elements/footer.php'); ?>
