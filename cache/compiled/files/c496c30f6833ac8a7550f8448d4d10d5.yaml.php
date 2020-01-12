<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav-admin/user/plugins/fullcalendar/blueprints.yaml',
    'modified' => 1569619434,
    'data' => [
        'name' => 'FullCalendar',
        'version' => '0.1.4',
        'description' => 'show Calendar Widget from ICS File(s), based on fullcalendar.io',
        'icon' => 'calendar',
        'author' => [
            'name' => 'Werner Joss',
            'email' => 'werner@hoernerfranzracing.de'
        ],
        'homepage' => 'https://github.com/wernerjoss/grav-plugin-fullcalendar',
        'keywords' => 'grav, plugin, ICS, Icalendar, fullcalendar.io',
        'bugs' => 'https://github.com/wernerjoss/grav-plugin-fullcalendar/issues',
        'docs' => 'https://github.com/wernerjoss/grav-plugin-fullcalendar/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ]
                ]
            ]
        ]
    ]
];
