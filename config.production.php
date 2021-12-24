<?php

return [
  'production' => true,
  'baseUrl' => 'sebastiangutierrez.co/',
  'collections' => [
    'posts' => [
        'filter' => function ($item) {
            return $item->published;
        }
    ],
  ],
];
