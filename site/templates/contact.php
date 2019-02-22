<?php snippet('header') ?>

  <main class="container full-height">
    <div class="contact cols">
      <div class="five">
        <div class="full">
          <span class="emoji">🔮</span>
          <h3>Bax <sup>studio</sup></h3>
          <p><?= $page->address() ?><br>
          <a class="nolink" href="tel:<?= $page->tel() ?>"><?= $page->tel() ?></a></p>
        </div>
        <div class="full">
          <span class="emoji">🦸🏻</span>
          <h3>Agent</h3>
          <p><?= $page->a_address() ?><br>
          <a class="nolink" href="mailto:<?= $page->a_email() ?>"><?= $page->a_email() ?></a><br>
          <a class="nolink" href="tel:<?= $page->a_tel() ?>"><?= $page->a_tel() ?></a></p>
        </div>
      </div>
      <div class="five">
        <div class="full">
          <span class="emoji">👌</span>
          <h3>Problem solving</h3>
          <p><a class="nolink" href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a></p>
        </div>
        <div class="full">
          <span class="emoji">💎</span>
          <h3>Socialize</h3>
          <ul>
            <?php $items = $page->social_urls()->toStructure();
            foreach ($items as $item): ?>
              <li><a href="<?= $item->url() ?>"><?= $item->name() ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>
