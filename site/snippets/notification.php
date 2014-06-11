<?php if($notification = forum::notification()): ?>
<div class="notification"><?php echo html($notification) ?></div>
<?php endif ?>