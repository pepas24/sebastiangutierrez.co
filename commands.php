<?php

$avaibleCommands = [
  'add'
];

if ( isset($argc) ) {
  if ( in_array($argv[1], $avaibleCommands) ) {
    $command = $argv[1];
    $command($argv[2], $argv[3]);
  }
}

function add ($collection, $name) {
  $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
  $date = date('j M\. Y');
  $collection_plural = $collection . 's';

  $template = "---
extends: _layouts.$collection
title: $name
date: $date
tag:
---

# $name

";

  file_put_contents("./source/_$collection_plural/$slug.md", $template);

  echo "Created new file " . $slug . ".md in " . $collection;
}
