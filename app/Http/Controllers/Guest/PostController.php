<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Services\StreamService;
use App\Repositories\PostRepository;
use App\Http\Controllers\Controller;

class StreamController extends Controller
{
    protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function index(Request $request)
    {
        app(PostService::class)->getLastArticleOnline();


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
