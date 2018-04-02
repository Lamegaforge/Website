<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Services\VideoService;
use App\Http\Controllers\Controller;
use App\Repositories\VideoRepository;
use App\Repositories\VideoChannelRepository;

class VideoController extends Controller
{
    protected $videoRepository;
    protected $videoChannelRepository;

    public function __construct(VideoRepository $videoRepository, VideoChannelRepository $videoChannelRepository)
    {
        $this->videoRepository = $videoRepository;
        $this->videoChannelRepository = $videoChannelRepository;
    }

    public function index(Request $request)
    {
        $videos = $this->videoRepository->getOnlineByCriterias($request);
        $lastVideo = $this->videoRepository->getLastOnline();
        $channels = $this->videoChannelRepository->all();

        return view('guest.video.index', [
            'videos' => $videos, 
            'lastVideo' => $lastVideo, 
            'channels' => $channels
        ]);
    }

    public function show(Request $request, $id)
    {
        $video = $this->videoRepository->getOnlineById($id);
        $randomVideos = $this->videoRepository->getOnlineRandom();

        return view('guest.video.show', ['video' => $video, 'randomVideos' => $randomVideos]);
    }  
}
