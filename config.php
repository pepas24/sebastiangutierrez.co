<?php

return [
    'production' => false,
    'baseUrl' => 'localhost:3000/',
    'siteName' => 'Sebastian Gutierrez',
    'siteDescription' => 'Lorem!',
    'collections' => [
      'posts',
      'projects'
    ],
    'navigation' => [
      [
        'name' => 'Inicio',
        'root' => '/'
      ],
      [
        'name' => 'Blog',
        'root' => '/blog'
      ],
      [
        'name' => 'Sobre mi',
        'root' => '/about'
      ],
      [
        'name' => 'LinkedIn',
        'root' => 'https://www.linkedin.com/in/sebastian-gutierrez-correa/',
        'external' => true
      ],
      [
        'name' => 'GitHub',
        'root' => 'https://github.com/pepas24/',
        'external' => true
      ]
    ],
    'getDate' => function ($page) {
      setlocale(LC_ALL, 'es_CO.UTF8');
      return strftime('%d %b. %Y', $page->date);
    }
];
