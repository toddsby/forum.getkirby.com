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

</head>
<body>
  <!--[if lte IE 9]>
  <div class="browserupdate">
    You are using an obsolete browser which can harm your experience and cause security trouble. Please <a href="http://browsehappy.com/" target="_blank">update your browser!</a>
  </div>
  <![endif]-->

  <header class="site-header cf" role="banner">

    <a class="logo" href="<?php echo url() ?>">kirby <span>forum</span></a>

    <nav class="nav-main" role="navigation">

      <ul class="nav cf">
        <?php foreach($site->find('home', 'search') as $item): ?>
        <li class="menu-item<?php e($item->isOpen(), ' is-active') ?>"><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
        <?php endforeach ?>
      </ul>

      <ul class="nav nav-right cf user">
        <?php if($user = $site->user()): ?>
        <li class="menu-item<?php e(url::current() == site()->user()->url(), ' is-active') ?>"><a href="<?php echo $user->url() ?>">@<?php echo html($user->username()) ?></a></li>
        <li class="menu-item"><a href="<?php echo url('logout') ?>">Sign out <small class="menu-item-arr">&rarr;</small></a></li>
        <?php else: ?>
        <li class="menu-item"><a href="<?php echo url('login') ?>">Sign in via Twitter <span class="arrow">&rarr;</span></a></li>
        <?php endif ?>
      </ul>

    </nav>

  </header>

  <?php snippet('notification') ?>

  <main class="page" role="main">