<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo html($site->title() . ' / ' . $page->title()) ?></title>

  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />

  <?php echo css('assets/css/jquery.atwho.css') ?>
  <?php echo css('assets/css/site.css') ?>
  <?php echo css('assets/css/form.css') ?>
  <?php echo css('assets/css/btn.css') ?>

</head>

<body class="error">
  <!--[if lte IE 9]>
  <div class="browserupdate">
    You are using an obsolete browser which can harm your experience and cause security trouble. Please <a href="http://browsehappy.com/" target="_blank">update your browser!</a>
  </div>
  <![endif]-->

  <div class="wrap border-animation">
    <header class="site-header" role="banner">
      <a class="logo" href="<?php echo url() ?>">Kirby</span></a>
    </header>
    <main class="text" role="main">
      <h1 class="alpha">Error 404</h1>
      <?php echo kirbytext($page->text()) ?>
    </main>
    <a class="btn" href="<?php echo url() ?>">Take me back home!</a>
  </div>

</body>

</html>