<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<div class="topics">
  <?php foreach($topics as $topic): ?>

  <article class="topic<?php e($topic->isSolved(), ' topic-is-solved') ?>">
    <header class="topic-header cf">

      <?php snippet('user', array('parent' => $topic, 'class' => 'topic-user')) ?>

      <h2 class="topic-headline"><a href="<?php echo $topic->url() ?>"><?php echo widont(html($topic->title())) ?></a></h2>

      <div class="topic-meta">

        <time class="date topic-date">
          <a href="<?php echo $topic->url() ?>"><?php echo $topic->date('d.m.Y - H:i') ?></a>
        </time>

        <small class="counter topic-reply-counter">
          <a href="<?php echo $topic->url() ?>"><?php echo $topic->children()->count() ?> Replies</a>
        </small>

      </div>

    </header>
  </article>

  <?php endforeach ?>
</div>

<?php snippet('pagination') ?>
<?php snippet('footer') ?>