<?php

return [

	'rediff_channel_hash' => 'UCJfprI19VJckLGURSrD3dQQ',

	'donate_url' => 'https://streamlabs.com/lamegaforgelive',

	'driver' => env('STREAM_DRIVER'),

	'drivers' => [

		'client' => [
			'key' => env('TWITCH_API_KEY'),
			'url' => 'https://api.twitch.tv/kraken/',
		],
		'mock' => [
            'name' => '',
            'status' => '',
            'game' => '',
            'template' => '',
		],
	]
];
