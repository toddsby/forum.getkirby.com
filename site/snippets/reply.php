<article class="reply" id="<?php echo $reply->uid() ?>">
  <header class="reply-header">
    <?php snippet('user', array('parent' => $reply, 'class' => 'reply-user')) ?>
    <time class="date reply-date">
      <a href="<?php echo $reply->parent()->url() . '/#' . $reply->uid() ?>"><?php echo $reply->date('d.m.Y - H:i') ?></a>
    </time>
  </header>
  <div class="reply-body">
    <div class="text reply-body-text">
      <?php echo kirbytext($reply->text()) ?>
    </div>

    <?php if($user = $site->user() and $user->isOwner($reply)): ?>
    <nav class="btn-nav">
      <?php if($user->may('edit', $reply)): ?>
      <a class="btn btn-rounded" href="<?php echo $reply->url('edit') ?>">Edit Reply</a>
      <?php endif ?>
      <?php if($user->may('delete', $reply)): ?>
      <a class="btn btn-rounded" href="<?php echo $reply->url('delete') ?>" onclick="return confirm('Do you really want to delete this reply?')">Delete Reply</a>
      <?php endif ?>
    </nav>
    <?php endif ?>

  </div>
</article>