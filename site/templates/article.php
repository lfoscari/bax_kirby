<?php snippet('header') ?>

  <main>

    <article>

      <!-- <div class="intro"> -->
        <!-- <img src="<?= $page->cover()->toFile()->url() ?>" class="lazyload"> -->
        <!-- <div class="intro"> -->
          <h1 class="intro"><?= $page->title() ?></h1>
          <!-- <p><b>Client</b> Giorgio Armani — <b>Skills</b> Art Direction, Illustration, Motion Design, Video</p> -->
        <!-- </div> -->
      <!-- </div> -->

      <div class="content">

      <?php if($page->clients()->isNotEmpty()): ?>
        <ul class="lines">
          <?php $clients =  $page->clients()->toStructure();
          foreach($clients as $client): ?>
            <li><?= $client->info() ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php if($page->text()->isNotEmpty()): ?>
        <?= $page->text()->kirbytext() ?>
      <?php endif; ?>

      <!-- </div> -->

      <?php if($page->images()->isNotEmpty()): ?>
        <div class="gallery-grid">
          <?php foreach ($page->images() as $image) {
            F::extension($image) == "gif" ? $image : $image->cover()->resize();
            $wide = abs($image->ratio() - 1.6) < .4;
            echo '<img class="lazyload blur-up' . ($wide ? ' wide' : '') . '" data-src="' . $image->url() . '">';
          } ?>
        </div>
      <?php endif; ?>

      <!-- <div class="content"> -->

      <?php if($page->credits()->isNotEmpty()): ?>
        <!-- Far comparire a richiesta -->
        <ul class="lines">
          <?php $credits =  $page->credits()->toStructure();
          foreach($credits as $credit): ?>
            <li><?= $credit->info() ?></li>
          <?php endforeach ?>
        </ul>
      <?php endif; ?>

      </div>
    </div>

    </article>

  </main>

<?= js(['assets/js/lazysizes.js', '@auto']) ?>
<?php snippet('footer') ?>
