<form class="form" id="reply" action="#reply" method="post">

  <?php if(!empty($alert)): ?>
  <fieldset class="alert">
    <?php echo kirbytext($alert) ?>
  </fieldset>
  <?php endif ?>

  <fieldset>
    <div class="field">
      <label class="label" for="reply-text">Your reply</label>
      <textarea class="input" id="reply-text" name="reply" required<?php e(isset($autofocus) and $autofocus == true, ' autofocus') ?>><?php echo isset($text) ? html($text) : null ?></textarea>
    </div>
  </fieldset>
  <fieldset class="buttons">
    <?php if(isset($cancel)): ?>
    <a href="<?php echo $cancel ?>" class="btn btn-rounded btn-cancel">Cancel</a>
    <?php endif ?>
    <input class="btn btn-rounded btn-submit" type="submit" name="submit" value="Reply">
  </fieldset>

</form>