<?php

$conf['master_version'] = 2;
$conf['master_modules'] = [
  'base' => [
    'features',
    'ft_site_settings',
    'list',
    'update',
    'shortcut',
    'search',
    'rdf',
    'path',
    'options',
    'number',
    'menu',
    'help',
    'file',
    'dashboard',
    'contextual',
    'comment',
    'color',
    'block',
  ],
  'local' => [
    'devel',
    'views_ui',
    'field_ui',
    'dblog',
  ],
  'live' => [],
];

$conf['master_uninstall_blacklist'] = [
  'base' => [],
  'live' => ['migrate'],
];

$conf['master_allow_base_scope'] = TRUE;
