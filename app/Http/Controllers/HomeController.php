<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Repositories\VideoRepository;

class HomeController extends Controller
{
    protected $postRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostRepository $postRepository, VideoRepository $videoRepository)
    {
        $this->postRepository = $postRepository;
        $this->videoRepository = $videoRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepository->getLastOnline(4);
        $videos = $this->videoRepository->getLastOnline(10);

        return view('guest.home.index', [
            'posts' => $posts, 
            'videos' => $videos, 
        ]);        
    }
}
