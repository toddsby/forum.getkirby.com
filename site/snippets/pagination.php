<nav class="pagination cf">
  <?php if($pagination->hasPrevPage()): ?>
  <a class="btn btn-rounded pagination-prev" href="<?php echo $pagination->prevPageUrl() ?>">
    Previous Page
  </a>
  <?php endif; ?>

  <?php if($pagination->hasNextPage()): ?>
  <a class="btn btn-rounded pagination-next" href="<?php echo $pagination->nextPageUrl() ?>">
    Next Page
  </a>
  <?php endif; ?>
</nav>