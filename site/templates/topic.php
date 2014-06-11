<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<article class="topic topic-details<?php e($page->isSolved(), ' topic-is-solved') ?>">

  <header class="topic-header cf">
    <?php snippet('user', array('parent' => $page, 'class' => 'topic-user')) ?>
    <h1 class="topic-headline"><?php echo widont(htmlspecialchars($page->title())) ?></h1>
    <div class="topic-meta">
      <time class="date topic-date"><?php echo $page->date('d.m.Y - H:i') ?></time>
    </div>
  </header>

  <div class="topic-body">

    <div class="text topic-body-text">
      <?php echo kirbytext($page->text()) ?>
    </div>

    <?php if($user = $site->user() and $user->isOwner($page)): ?>
    <nav class="btn-nav">

      <?php if($user->may('edit', $page)): ?>
        <a class="btn btn-rounded" href="<?php echo $page->url('edit') ?>">Edit Topic</a>
        <?php if($page->isSolved()): ?>
        <a class="btn btn-rounded" href="<?php echo $page->url('unsolve') ?>">
          Mark as unsolved
        </a>
        <?php else: ?>
        <a class="btn btn-rounded" href="<?php echo $page->url('solve') ?>">
          Mark as solved
        </a>
        <?php endif ?>
      <?php endif ?>

      <?php if($user->may('delete', $page)): ?>
      <a class="btn btn-rounded" onclick="return confirm('Do you really want to delete this topic?')" href="<?php echo $page->url('delete') ?>">Delete Topic</a>
      <?php endif ?>

    </nav>
    <?php endif ?>

  </div>

  <section class="replies">

    <header class="replies-header">
      <h2 class="replies-headline"><small><?php echo $page->children()->count() ?></small> Replies</h2>
    </header>

    <?php foreach($page->children() as $reply): ?>
    <?php snippet('reply', array('reply' => $reply)) ?>
    <?php endforeach ?>

    <?php if($site->user()): ?>
    <div class="reply-form">
      <?php snippet('reply.form') ?>
    </div>
    <?php else: ?>
    <div class="reply-body">
      <div class="text">
        <p>Please <a href="<?php echo url('login') ?>">sign in via Twitter</a> to reply</p>
      </div>
    </div>
    <?php endif ?>

  </section>

</article>

<script>

window.users = <?php echo json_encode($users) ?>;

</script>

<?php snippet('footer') ?>