<?php

return [

    'driver' => env('VIDEO_DRIVER'),

    'drivers' => [

        'client' => [
            'key' => env('YOUTUBE_API_KEY'),
        ],
        'mock' => [
            'list_hash' => [

            ],
        ],
    ]
];
