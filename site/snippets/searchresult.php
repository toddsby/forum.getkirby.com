<?php

if($item->type() == 'reply') {
  $title = 'Reply to: ' . $item->parent()->title();
  $url   = $item->parent()->url() . '/#' . $item->uid();
} else {
  $title = $item->title();
  $url   = $item->url();
}

?>
<article class="topic">
  <header class="topic-header cf">

    <?php snippet('user', array('parent' => $item, 'class' => 'topic-user')) ?>

    <h2 class="topic-headline"><a href="<?php echo $url ?>"><?php echo widont(html($title)) ?></a></h2>

    <div class="topic-meta">

      <time class="date topic-date">
        <a href="<?php echo $url ?>"><?php echo $item->date('d.m.Y - H:i') ?></a>
      </time>

      <small class="counter topic-reply-counter">
        <a href="<?php echo $url ?>"><?php echo ucfirst($item->type()) ?></a>
      </small>

    </div>

  </header>
</article>