<?php snippet('header') ?>

<h1 class="headline"><?php echo html($page->title()) ?></h1>

<div class="text">
  <?php echo kirbytext($page->text()) ?>
</div>

<?php snippet('footer') ?>