<?php snippet('header') ?>

  <main class="container full-height">
    <div class="contact">

      <div>
        <span class="emoji">🔮</span>
        <h3>Bax <sup>studio</sup></h3>
        <p><?= $page->address() ?><br>
        <a href="tel:<?= $page->tel() ?>"><?= $page->tel() ?></a></p>
      </div>

      <div>
        <span class="emoji">👌</span>
        <h3>Problem solving</h3>
        <p><a href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a></p>
      </div>

      <div>
        <span class="emoji">🦸🏻</span>
        <h3>Agent</h3>
        <p><?= $page->a_address() ?><br>
        <a href="mailto:<?= $page->a_email() ?>"><?= $page->a_email() ?></a><br>
        <a href="tel:<?= $page->a_tel() ?>"><?= $page->a_tel() ?></a></p>
      </div>

      <div>
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
  </main>

<?php snippet('footer') ?>
