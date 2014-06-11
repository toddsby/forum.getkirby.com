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
  <body class="forum">

    <header class="header cf">

      <h1 class="logo"><a href="<?php echo url() ?>">kirby <small>forum</small></a></h1>

      <nav class="menu cf">
        <ul>
          <?php foreach($site->find('home', 'search') as $item): ?>
          <li class="menu-item<?php e($item->isOpen(), ' menu-item-is-active') ?>"><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
          <?php endforeach ?>
        </ul>
      </nav>

      <nav class="menu user cf">
        <ul>
          <?php if($user = $site->user()): ?>
          <li class="menu-item<?php e(url::current() == site()->user()->url(), ' menu-item-is-active') ?>"><a href="<?php echo $user->url() ?>">@<?php echo html($user->username()) ?></a></li>
          <li class="menu-item"><a href="<?php echo url('logout') ?>">Sign out <small class="menu-item-arr">&rarr;</small></a></li>
          <?php else: ?>
          <li class="menu-item"><a href="<?php echo url('login') ?>">Sign in via Twitter <small class="menu-item-arr">&rarr;</small></a></li>
          <?php endif ?>
        </ul>
      </nav>

    </header>

    <?php snippet('notification') ?>

    <main class="page">