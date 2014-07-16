<?php snippet('header') ?>

<form class="form search-form">
  <div class="field">
    <input class="input" type="search" name="q" placeholder="Search…" value="<?php echo htmlspecialchars(get('q')) ?>" autofocus required>
  </div>
  <div class="buttons">
    <input class="btn" type="submit" value="Search">
  </div>
</form>

<?php if(!get('q')): ?>
  <p class="search-message"><i>Please enter your search…</i></p>
<?php elseif(!$items->count()): ?>
  <p class="search-message"><i>There are unfortunately no results for your search :(</i></p>
<?php else: ?>
  <?php foreach($items as $item) snippet('searchresult', compact('item')); ?>
<?php endif ?>

<?php if($pagination) snippet('pagination') ?>
<?php snippet('footer') ?>