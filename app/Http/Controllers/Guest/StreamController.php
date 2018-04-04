<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Services\StreamService;
use App\Http\Controllers\Controller;
use App\Repositories\VideoRepository;
use App\Repositories\StreamRepository;
use App\Repositories\VideoChannelRepository;

class StreamController extends Controller
{
    protected $video;
    protected $stream;
    protected $videoChannel;

    public function __construct(VideoRepository $video, StreamRepository $stream, VideoChannelRepository $videoChannel)
    {
        $this->video = $video;
        $this->stream = $stream;
        $this->videoChannel = $videoChannel;
    }

    public function index(Request $request)
    {
        $channel = $this->videoChannel->findWhere([
            'hash' => config('stream.rediff_channel_hash')
        ]);
        $videos = $this->video->getLastOnlineRandomByChannel($channel->first->slug_name, 20);
        $stream = app(StreamService::class)->getSavedStream();

        return view('guest.stream.index', [
            'stream' => $stream, 
            'videos' => $videos, 
        ]);
    } 
}
