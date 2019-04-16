<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
      'posts',
      'projects'
    ],
    'navigation' => [
      [
        'name' => 'Artículos',
        'root' => '/'
      ],
      [
        'name' => 'Proyectos',
        'root' => '/projects'
      ],
      [
        'name' => 'Sobre mi',
        'root' => '/about'
      ],
      [
        'name' => 'GitHub',
        'root' => 'https://github.com/pepas24/'
      ]
    ]
];
