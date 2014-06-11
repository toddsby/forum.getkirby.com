<?php snippet('header') ?>

<header class="page-header">
  <h1 class="page-headline"><?php echo html($page->title()) ?></h1>
</header>

<div class="page-body">
  <div class="text">
    <?php echo kirbytext($page->text()) ?>
  </div>
</div>

<?php snippet('footer') ?>