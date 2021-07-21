<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Robert Harvey',
    'description' => 'Portfolio website for Robert Harvey',
    'collections' => [
        'projects' => [
            'path' => 'projects',
            'sort' => 'date',
            'getTags' => function ($page) {
                return explode(', ', $page->tags);
            }
        ]
    ],
];
