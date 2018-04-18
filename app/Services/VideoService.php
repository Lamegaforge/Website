<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\VideoChannelRepository;

class VideoService
{
    protected $videoChannel;

    public function __construct(VideoChannelRepository $videoChannel)
    {
        $this->videoChannel = $videoChannel;
    }

	public function getRediffChannel()
	{
        $results = $this->videoChannel->findWhere([
            'hash' => config('stream.rediff_channel_hash')
        ]);

		return $results->first;
	}
}
