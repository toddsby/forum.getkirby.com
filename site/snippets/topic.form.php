<form class="form topic-form" method="post">

  <?php if(!empty($alert)): ?>
  <fieldset class="alert">
    <?php echo kirbytext($alert) ?>
  </fieldset>
  <?php endif ?>

  <fieldset>
    <div class="field">
      <label class="label">Title</label>
      <input class="input" type="text" name="title" value="<?php echo html(get('title', $topic->title())) ?>" autofocus required>
    </div>
    <div class="field">
      <label class="label">Text</label>
      <textarea class="input" name="text" required><?php echo html(get('text', $topic->text())) ?></textarea>
    </div>
  </fieldset>
  <fieldset class="buttons">
    <a href="<?php echo $cancel ?>" class="btn btn-rounded btn-cancel">Cancel</a>
    <input class="btn btn-rounded btn-submit" type="submit" name="submit" value="Post Topic">
  </fieldset>
</form>