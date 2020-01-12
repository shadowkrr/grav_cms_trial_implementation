<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav-admin/user/themes/afterburner2/blueprints.yaml',
    'modified' => 1557586037,
    'data' => [
        'name' => 'Afterburner2',
        'version' => '1.8.0',
        'description' => 'Afterburner2 is modern, responsive, and **built for speed**!',
        'icon' => 'paper-plane',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-afterburner2',
        'demo' => 'http://demo.getgrav.org/afterburner2-skeleton/',
        'keywords' => 'afterburner, theme, modern, fast, responsive',
        'bugs' => 'https://github.com/getgrav/grav-theme-afterburner2/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
