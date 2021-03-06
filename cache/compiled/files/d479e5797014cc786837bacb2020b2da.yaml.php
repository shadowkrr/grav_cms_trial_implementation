<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav-admin/user/plugins/quick-tray-links/blueprints.yaml',
    'modified' => 1558196313,
    'data' => [
        'name' => 'Quick Tray Links',
        'version' => '1.0.0',
        'description' => 'Easily add cusotmizable admin quick tray links',
        'icon' => 'link',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'devs@trilbymedia.com'
        ],
        'homepage' => 'https://github.com/trilbymedia/grav-plugin-quick-tray-links',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/trilbymedia/grav-plugin-quick-tray-links/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-quick-tray-links/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'links' => [
                    'type' => 'list',
                    'label' => 'Links',
                    'help' => 'Links defined here will show up in the navigation quick-tray',
                    'fields' => [
                        '.icon' => [
                            'type' => 'iconpicker',
                            'label' => 'Icon',
                            'default' => 'fa fa-question-circle',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.link' => [
                            'type' => 'text',
                            'label' => 'Link',
                            'default' => 'http://somelink.com',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.tooltip' => [
                            'type' => 'textarea',
                            'label' => 'Tooltip'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
