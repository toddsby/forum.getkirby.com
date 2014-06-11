<nav class="breadcrumb">
  <ul>
    <?php foreach($site->breadcrumb()->limit(2) AS $crumb): ?>
    <li><a<?php e($crumb->isActive(), ' class="active"') ?> data-separator="&rarr;" href="<?php echo $crumb->url() ?>"><?php echo html($crumb->title()) ?></a></li>
    <?php endforeach ?>
  </ul>

  <?php if($site->user()): ?>
    <?php if($page->template() == 'thread'): ?>
    <a class="btn btn-rounded breadcrumb-option" href="<?php echo $page->url() . '/create' ?>">New Topic</a>
    <?php else: ?>
    <a class="btn btn-rounded breadcrumb-option" href="#reply">Reply</a>
    <?php endif ?>
  <?php endif ?>

</nav>