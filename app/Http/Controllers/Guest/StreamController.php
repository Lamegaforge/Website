<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Services\VideoService;
use App\Services\StreamService;
use App\Http\Controllers\Controller;
use App\Repositories\VideoRepository;

class StreamController extends Controller
{
    protected $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function index(Request $request)
    {
        $rediffChannel = app(VideoService::class)->getRediffChannel();

        $videos = $this->videoRepository->getLastOnlineRandomByChannel($rediffChannel->slug_name, 20);

        $stream = app(StreamService::class)->getSavedStream();

        return view('guest.stream.index', [
            'stream' => $stream, 
            'videos' => $videos, 
        ]);
    } 
}
