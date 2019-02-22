<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="robots" content="noindex">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <?= css(['assets/css/bax.css', '@auto']) ?>
</head>

<body>
  <h1 class="title"><a href="<?= $site->url() ?>">bax</a></h1>
  <nav class="left">
    <a href="<?= $pages->find('works')->url() ?>">works</a>
    <span class="rotate label"></span>
    <a href="<?= $pages->find('social')->url() ?>">social</a>
  </nav>
