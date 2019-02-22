<?php

  Kirby::plugin('luigifoscari/vimeo', [
    'tags' => [
      'vimeo' => [
        'html' => function($tag) {
          return '<figure class="embed-container"><iframe class="lazyload" data-src="' . $tag->value . '" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></figure>';
        }
      ]
    ]
  ]);

?>
