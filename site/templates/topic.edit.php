<?php snippet('header') ?>

<header class="page-header">
  <h1 class="page-headline"><?php echo html($page->title()) ?>: <a href="<?php echo $topic->url() ?>"><?php echo html($topic->title()) ?></a></h1>
</header>

<div class="page-body">
  <?php snippet('topic.form', array('cancel' => $topic->url())) ?>
</div>

<?php snippet('footer') ?>