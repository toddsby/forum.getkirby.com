<?php snippet('header') ?>

<div class="threads cf">
  <?php foreach($pages->visible() as $thread): ?>
  <article class="thread">
    <h2 class="thread-headline"><a href="<?php echo $thread->url() ?>"><?php echo $thread->title() ?></a></h2>
    <div class="thread-body">
      <div class="text thread-body-text">
        <?php echo kirbytext($thread->text()) ?>
      </div>
    </div>
    <small class="counter thread-topic-counter">
      <a href="<?php echo $thread->url() ?>"><?php echo $thread->children()->children()->count() ?> Topics</a>
    </small>
  </article>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>