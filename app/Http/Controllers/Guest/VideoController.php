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

        return view('guest.video.index', ['videos' => $videos]);
    }

    public function show(Request $request, $id)
    {
        $video = app(VideoService::class)->getOnlineById($id);

        return view('guest.video.show', ['video' => $video]);
    }  
}
