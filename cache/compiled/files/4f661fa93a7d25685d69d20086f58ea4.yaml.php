<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav-admin/user/config/plugins/git-sync.yaml',
    'modified' => 1558197983,
    'data' => [
        'enabled' => false,
        'folders' => [
            0 => 'pages'
        ],
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'user' => 'shadowkrr',
        'password' => 'gitsync-def502007c5564b813e7538fbd3619aaab3bf06795383154d64a9a05f8a076e54b1b671ae54cde4acecd3d053dcefbe390f183b8ded7e095807d8004eee5094fb114319a491ad0bb8df2a0ed1ea7a38ec5c8b1d93ab6c7b7bc70fe60ff12',
        'webhook' => '/_git-sync-3fe36a886ec4',
        'webhook_enabled' => '0',
        'webhook_secret' => '09eaff0ca4516d933759704b4a02a6f777cc7604cd5859aa',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'message' => '(Grav GitSync) Automatic Commit',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
