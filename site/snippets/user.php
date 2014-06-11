<?php if($user = isset($user) ? $user : $parent->user()): ?>
<figure class="user <?php echo $class ?>" title="@<?php echo html($user->username()) ?>">
  <a class="user-avatar" href="<?php echo $user->url() ?>"><img src="<?php echo $user->avatar() ?>"></a>
  <figcaption class="user-username">
    <a href="<?php echo $user->url() ?>"><?php echo html($user->username()) ?></a>
  </figcaption>
</figure>
<?php endif ?>