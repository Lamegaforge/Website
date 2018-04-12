<?php

return [

    'driver' => env('VIDEO_DRIVER'),

    'drivers' => [

        'client' => [
            'key' => env('YOUTUBE_API_KEY'),
        ],
        'mock' => [
            'list_hash' => [
                'sndLD3ROi9k', 'NjXZcb5TuYM', 'k7uVzJzl71o', 't7GF473r9ao'
            ],
        ],
    ]
];
