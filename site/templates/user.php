<?php snippet('header') ?>

<header class="page-header">
  <h1 class="page-headline">Topics and replies by: <a href="<?php echo $user->twitter() ?>">@<?php echo $user->username() ?></a></h1>
</header>

<?php foreach($items as $item) snippet('searchresult', compact('item')); ?>

<?php snippet('pagination') ?>
<?php snippet('footer') ?>