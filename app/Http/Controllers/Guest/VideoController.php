<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Services\VideoService;
use App\Http\Controllers\Controller;
use App\Repositories\VideoRepository;

class VideoController extends Controller
{
    protected $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function index(Request $request)
    {
        $videos = $this->videoRepository->getOnlineByCriterias($request);
        $lastVideo = $this->videoRepository->getLastOnline();

        return view('guest.video.index', ['videos' => $videos, 'lastVideo' => $lastVideo]);
    }

    public function show(Request $request, $id)
    {
        $video = $this->videoRepository->getOnlineById($id);
        $randomVideos = $this->videoRepository->getOnlineRandom();

        return view('guest.video.show', ['video' => $video, 'randomVideos' => $randomVideos]);
    }  
}
