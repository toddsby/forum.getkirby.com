<?php snippet('header') ?>

<header class="page-header">
  <h1 class="page-headline">Reply to: <a href="<?php echo $page->parent()->url() ?>"><?php echo html($page->parent()->title()) ?></a></h1>
</header>

<div class="page-body">
  <?php snippet('reply.form', array('text' => $page->text(), 'autofocus' => true, 'cancel' => $page->parent()->url())) ?>
</div>

<?php snippet('footer') ?>