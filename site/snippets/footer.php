  <nav class="right">
    <a href="<?= $pages->find('about')->url() ?>">about</a>
    <a href="<?= $pages->find('contact')->url() ?>">contact</a>
  </nav>

  <div class="swatches">
    <span style="background-color: #0000d8"></span>
    <span style="background-color: #d5aa97"></span>
    <span style="background-color: #0e6f45"></span>
    <span style="background-color: #fb4d52"></span>
  </div>

  <!-- <?php if($page->title() == 'Social'): ?>
    <script src='https://unpkg.com/axios/dist/axios.min.js'></script>
  <?php endif ?> -->

  <?= js(['assets/js/bax.js', '@auto']) ?>
  <script type="text/javascript">
    <?php switch ($page->title()) {
      case "Home":
          echo "isHome()";
          break;
      case "Works":
          echo "isWorks()";
          break;
      case "Social":
          echo "isSocial()";
          break;
      case "About":
          echo "isAbout()";
          break;
      default:
          echo "isArticle()";
          break;
    } ?>
  </script>
</body>
</html>
