<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav-admin/user/config/site.yaml',
    'modified' => 1558827648,
    'data' => [
        'title' => 'SHACHILOG',
        'default_lang' => 'ja',
        'author' => [
            'name' => 'shadowkrr',
            'email' => 'shadowkrr@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 3000,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
