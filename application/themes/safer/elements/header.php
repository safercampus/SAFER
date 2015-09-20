<!DOCTYPE html>

<head>
  <?=Loader::element('header_required'); // concrete5 setup ?>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='//fonts.googleapis.com/css?family=Pompiere|Rokkitt|Roboto+Condensed|Roboto+Slab|Slabo+27px' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/application.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target="#sidenav" data-offset="20">
  <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div class="<?=$c->getPageWrapperClass()?>">
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img alt="Draft pennant logo blue" class="logo" src="<?=$view->getThemePath()?>/img/draft-pennant-logo-blue.png"> SAFER
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
            $bt = BlockType::getByHandle('autonav');
            $bt->controller->orderBy = 'display_asc';
            $bt->controller->displayPages = 'top';
            $bt->render('templates/topnav');
          ?>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <p class="navbar-btn">
                <a class="btn btn-primary" href="/teach-in">Request a teach-in</a>
              </p>
            </li>
            <li>
              <p class="navbar-btn">
                <a class="btn btn-primary" href="/donate">Donate</a>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
