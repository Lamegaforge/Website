<?php

return [

	'youtube' => [
		'key' => env('YOUTUBE_API_KEY'),
	],
	'twitch' => [
		'key' => env('TWITCH_API_KEY'),
		'url' => 'https://api.twitch.tv/kraken/',
	]
];
