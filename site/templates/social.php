<?php snippet('header') ?>

<main class="container wall siema">
  <?php foreach ($pages->find('Works')->children() as $work) {
      foreach ($work->images() as $image): ?>
        <figure>
          <img class="lazyload blur-up" src="<?= $image->url() ?>">
          <p>Article name</p>
        </figure>
      <?php endforeach;
    } ?>
</main>

<?php snippet('footer') ?>
