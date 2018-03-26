<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Repositories\VideoRepository;

class VideoController extends Controller
{
    public function show(Request $request, VideoRepository $videoRepository)
    {
        $videos = $videoRepository->all();

        return view('guest.video.index', ['videos' => $videos]);
    }    

    public function show(Request $request, VideoRepository $videoRepository)
    {
        $video = $videoRepository->find($request->get('id'));

        return view('guest.video.show', ['video' => $video]);
    }
}
