<!DOCTYPE html>

<head>
  <?=Loader::element('header_required'); // concrete5 setup ?>
  <? /* Favicon code and images generated with http://realfavicongenerator.net/ */ ?>
  <link rel="apple-touch-icon" sizes="57x57" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?=$view->getThemePath()?>/img/favicons/apple-touch-icon-180x180.png">
  <link rel="shortcut icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="shortcut icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="shortcut icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="shortcut icon" type="image/png" href="<?=$view->getThemePath()?>/img/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?=$view->getThemePath()?>/img/favicons/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='//fonts.googleapis.com/css?family=Pompiere|Rokkitt|Roboto+Condensed|Roboto+Slab|Slabo+27px' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$view->getStylesheet('application.less')?>" type='text/css'>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target="#sidenav" data-offset="20">
  <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div class="<?=$c->getPageWrapperClass()?>">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#navbar"
              aria-expanded="false"
              aria-controls="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <div class="logo"></div>
          </a>
          <div class="pull-right visible-xs">
            <p class="navbar-btn">
              <a class="btn btn-primary" href="/teach-in">Request a teach-in</a>
            </p>
            <p class="navbar-btn extra-margin">
              <a class="btn btn-primary" href="/donate">Donate</a>
            </p>
          </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
            $bt = BlockType::getByHandle('autonav');
            $bt->controller->orderBy = 'display_asc';
            $bt->controller->displayPages = 'top';
            $bt->render('templates/topnav');
          ?>
          <ul class="nav navbar-nav navbar-right hidden-xs">
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
