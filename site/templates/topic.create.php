<?php snippet('header') ?>

<header class="page-header">
  <h1 class="page-headline"><?php echo html($page->headline()) ?> <a href="<?php echo $thread->url() ?>"><?php echo html($thread->title()) ?></a></h1>
</header>

<div class="page-body">
  <?php snippet('topic.form', array('cancel' => $thread->url())) ?>
</div>

<?php snippet('footer') ?>