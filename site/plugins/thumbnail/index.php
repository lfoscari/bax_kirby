<?php

  Kirby::plugin('luigifoscari/thumbnail', [
    'tags' => [
      'thumbnail' => [
        'attr' => [ 'word', 'thumbnail', 'number' ],
        'html' => function($tag) {
          return '<span data-image="' . $tag->parent()->file($tag->thumbnail)->url() . '">' . $tag->word . '</span><sup>' . $tag->number . '</sup>';
        }
      ]
    ]
  ]);

?>
