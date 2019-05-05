<?php snippet('header') ?>

<main class="container wall">
  <?php foreach ($page->images() as $image): ?>
    <img class="lazyload blur-up" src="<?= $image->url() ?>">
  <?php endforeach ?>
</main>

<?php snippet('footer') ?>
