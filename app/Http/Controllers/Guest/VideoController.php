<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Services\VideoService;
use App\Http\Controllers\Controller;
use App\Repositories\VideoRepository;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $videos = app(VideoService::class)->getOnlineByCriterias($request);
        $lastVideo = app(VideoService::class)->getLastOnline();

        return view('guest.video.index', ['videos' => $videos, 'lastVideo' => $lastVideo]);
    }

    public function show(Request $request, $id)
    {
        $video = app(VideoService::class)->getOnlineById($id);
        $randomVideos = app(VideoService::class)->getOnlineRandom();

        return view('guest.video.show', ['video' => $video, 'randomVideos' => $randomVideos]);
    }  
}
