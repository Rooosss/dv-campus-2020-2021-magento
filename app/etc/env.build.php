<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '96f9a6753460dbb76f66549e89038efc'
    ],
    'db' => [
        'table_prefix' => 'm2_',
        'connection' => [
            'default' => [
                'host' => 'mysql',
                'dbname' => 'rostyslav_vyshemirskyi_build_local',
                'username' => 'rostyslav_vyshemirskyi_build_local',
                'password' => 'flsrrggxf8448vjdvr',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_'
            ],
            'page_cache' => [
                'id_prefix' => '69d_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'rostyslav-vyshemirskyi-dev.local'
    ],
    'install' => [
        'date' => 'Mon, 05 Oct 2020 14:23:09 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://rostyslav-vyshemirskyi-dev.local/',
                    'base_link_url' => '{{unsecure_base_url}}',
                    'base_static_url' => 'https://rostyslav-vyshemirskyi-dev.local/static/',
                    'base_media_url' => 'https://rostyslav-vyshemirskyi-dev.local/media/'
                ],
                'secure' => [
                    'base_url' => 'https://rostyslav-vyshemirskyi-dev.local/',
                    'base_link_url' => '{{secure_base_url}}',
                    'base_static_url' => 'https://rostyslav-vyshemirskyi-dev.local/static/',
                    'base_media_url' => 'https://rostyslav-vyshemirskyi-dev.local/media/'
                ],
            ],
        ],
        'websites' => [
            'base' => [
                'general' => [
                    'locale' => [
                        'code' => 'uk_UA'
                    ]
                ],
                'design' => [
                    'theme' => [
                        'theme_id' => 5
                    ]
                ]
            ],
            'additional_website' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'https://rostyslav-vyshemirskyi-additional-dev.local/',
                        'base_link_url' => 'https://rostyslav-vyshemirskyi-additional-dev.local/',
                        'base_static_url' => 'https://rostyslav-vyshemirskyi-additional-dev.local/static/',
                        'base_media_url' => 'https://rostyslav-vyshemirskyi-additional-dev.local/media/'
                    ],
                    'secure' => [
                        'base_url' => 'https://rostyslav-vyshemirskyi-additional-dev.local/',
                        'base_link_url' => 'https://rostyslav-vyshemirskyi-additional-dev.local/',
                        'base_static_url' => 'https://rostyslav-vyshemirskyi-additional-dev.local/static/',
                        'base_media_url' => 'https://rostyslav-vyshemirskyi-additional-dev.local/media/'
                    ]
                ]
            ]
        ]
    ]
];
