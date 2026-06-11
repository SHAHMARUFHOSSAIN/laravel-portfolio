<?php

return [

    'title' => 'Dashboard',

    'widgets' => [
        'account' => [
            'title' => 'Your Account',
        ],

        'filament_info' => [
            'title' => 'About Filament',
            'content' => 'Filament is a collection of Laravel packages developed by the team at <a href=":website" class="filament-link" target="_blank" rel="noopener">Wire Elements</a>, designed to simplify building beautiful admin panels using the <a href="https://laravel.com" target="_blank" class="filament-link" rel="noopener">Laravel</a> framework.',
            'links' => [
                'documentation' => [
                    'label' => 'Documentation',
                    'url' => 'https://filamentphp.com/docs',
                ],

                'github' => [
                    'label' => 'GitHub',
                    'url' => 'https://github.com/filamentphp/filament',
                ],
            ],
        ],
    ],

];
