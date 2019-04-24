<?php snippet('header') ?>

  <!-- TODO: Rifare immagine iniziale -->

  <main class="container full-height over-width-mobile">
    <div class="project-link__about__center">
      <img src="<?= $page->cover()->toFile()->url() ?>" alt="">
    </div>
    <!-- <div class="arrow-down">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.36 109.5"><path fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" d="M8.18 0v107.33"/><path fill="#fff" d="M0 100.7l1.47-1.36 6.71 7.22 6.71-7.22 1.47 1.36-8.18 8.8L0 100.7z"/></svg>
    </div> -->
  </main>

  <!-- TODO: Eliminare le colonne e usare grid -->

  <div class="about">

    <div class="introduction">
      <?= $page->intro()->kirbytext() ?>
      <div class="project-link__about">
        <img class="gun" src="<?= $page->default_hover()->toFiles() ?>" alt="<?= $page->default_hover()->alt() ?>">
      </div>
    </div>

    <div class="informations about-grid">

      <div>
        <?= $page->bio()->kirbytext() ?>
      </div>

      <div>
        <h3>Interests and Skills</h3>
        <ul class="lines">
          <?php $items = $page->interests()->toStructure();
          foreach ($items as $item): ?>
            <li><?= $item->name() ?></li>
          <?php endforeach ?>
        </ul>
      </div>

      <div class="wide">
        <h3>Special Projects and Awards</h3>
        <ul class="lines">
          <?php $items = $page->awards()->toStructure();
          foreach ($items as $item): ?>
            <li><?= $item->period()->toDate('m.Y') ?> _ <?= $item->name() ?></li>
          <?php endforeach ?>
          <li>12.2011 _ Live visuals for ELITA "Path of the Rythm" @Teatro Franco Parenti, Milano ITALY</li>
          <li>04.2012 _ Video projection for KEY Kitchen @Fuorisalone SUPERSTUDIO, Milano ITALY</li>
          <li>11.2012 _ Motion Design Workshop by BONSAININJA @Film Festival, Verona ITALY</li>
          <li>05.2013 _ Interaction Design project by BONSAININJA for HEYDAR ALIEV MUSEUM @Baku, AZEIRBAIJAN</li>
          <li>12.2013 _ Visuals/Video projection for Leonard ETO @Teatro TRIENNALE, Milano ITALY</li>
          <li>07.2014 _ Video Teaser for BLOOP Festival @San Antoni, IBIZA</li>
          <li>10.2014 _ Visuals for ELISA concert @Unipol Arena Bologna ITALY</li>
          <li>01.2015 _ Opening Titles for "Reach the Horizon" PARKOUR Film</li>
          <li>03.2015 _ Visual projection for XStudio, @X54 Sydney, AUSTRALIA</li>
          <li>03.2015 _ Graphic Package for "The VOICE of Italy" on RAI2, @Studi RAI Mecenate, Milano ITALY</li>
          <li>05.2015 _ Padiglione Azerbaijan project by Bonsaininja Studio and Simmetrico @EXPO Milano ITALY</li>
          <li>05.2015 _ Video Visuals for EDISON "OPEN" @Fuori EXPO, Giardino della Triennale, Milano ITALY</li>
          <li>08.2015 _ Video Documentary ANDE TRAIL, RUNNING FOR THE ESSENTIAL @Cordillera Blanca, Ancash PERÙ</li>
          <li>09.2015 _ 1 Place @Best Event Awards for EDISON Open 4EXPO @Teatro Franco Parenti, Milano ITALY</li>
          <li>01.2016 _ 5 Collages Prints for Capodopera stand @IMM Cologne for Design Week. @Cologne, GERMANY</li>
          <li>11.2017 _ Motion Design x "Oh Vita!" by Lorenzo Jovanotti @GaeAulenti, Milano ITALY</li>
          <li>11.2018 _ ADCI AWARD - SILVER Pitti Uomo 2018 - Film @ADCI, ITALY</li>
        </ul>
      </div>

    </div>

  </div>

<?php snippet('footer') ?>
