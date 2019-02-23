<?php snippet('header') ?>

<!-- <p>
  <?php
  $relatedPages =  $page->featured_works()->toPages();
  foreach($relatedPages as $relatedPage): ?>
    <?= $relatedPage->title() ?>
  <?php endforeach ?>
</p> -->

<main class="container over-width-mobile">
  <a href="works.html" class="project-link">
    <?php
      $items = $page->featured_works()->toPages();
      $counter = 0;
    ?>
    <?php foreach ($items as $key => $item): ?>
      <img src="<?= $item->cover()->toFile()->url() ?>"
           alt="<?= $item->title() ?>"
           data-text="<?= $item->title() ?>"
           data-url="<?= $item->url() ?>"
           <?= e($counter > 0, ' class="hide"') ?>
      >
    <?php
      $counter++;
      endforeach;
    ?>
  </a>
</main>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200" id="rotating_text">
  <path id="rectangle" d="M20,35.3h260v129.5H20V35.3h260v129.5H20V35.3z"/>
  <text id="text"><textPath id="tp" xlink:href="#rectangle" startOffset="100%">
    <?= $page->rotating_text() ?>
  </textPath></text>
</svg>

<?php snippet('footer') ?>
