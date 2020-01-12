<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav-admin/user/themes/landed/blueprints.yaml',
    'modified' => 1569619484,
    'data' => [
        'name' => 'Landed',
        'version' => '0.1.4',
        'description' => 'Grav port of Landed theme by HTML5 UP',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Hugh Barnes',
            'email' => 'dev@hubns.com'
        ],
        'homepage' => 'https://github.com/hughbris/grav-theme-landed',
        'demo' => 'https://behold.metamotive.co.nz/landed',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/hughbris/grav-theme-landed/issues',
        'readme' => 'https://github.com/hughbris/grav-theme-landed/blob/develop/README.md',
        'docs' => 'https://github.com/hughbris/grav-theme-landed/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
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
