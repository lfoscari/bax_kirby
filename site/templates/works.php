<?php snippet('header') ?>

  <main class="container">
    <div class="works-container">
      <?php
      $works =  $pages->find("works")->children();
      foreach($works as $work): ?>
        <?php if($work->cover_gif()->isNotEmpty()): ?>
          <a class="work gif" href="<?= $work->url() ?>">
            <img class="lazyload" data-src="<?= $work->cover()->toFiles() ?>" data-hover="<?= $work->cover_gif()->toFiles() ?>">
            <p><?= $work->title() ?></p>
          </a>
        <?php else: ?>
          <a class="work" href="<?= $work->url() ?>">
            <img src="<?= $work->cover()->toFiles() ?>" alt="<?= $work->cover()->alt() ?>">
            <p><?= $work->title() ?></p>
          </a>
        <?php endif; ?>
      <?php endforeach ?>

      <!-- TODO: Remove -->
      <?php
        foreach ($page->children() as $work)
          foreach ($work->images() as $image)
            echo '<a class="work"><img class="lazyload blur-up" data-src="' . $image->url() . '"><p>Temporaneo</p></a>';
      ?>

    </div>
  </main>

<?= js(['assets/js/lazysizes.js', '@auto']) ?>
<?php snippet('footer') ?>
