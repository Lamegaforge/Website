<?php

namespace App\Console\Commands;

use App\Exceptions;
use App\Models\Video;
use App\Services\VideoService;
use Illuminate\Console\Command;
use App\Repositories\VideoRepository;

class CollectNewVideos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:collect';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Récupere les nouvelles videos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(VideoChannelRepository $videoChannelRepository, VideoRepository $videoRepository)
    {
        $channels = $videoChannelRepository->all();

        foreach ($channels as $channel) {

            try {
                
                $youtubeIdList = app(VideoService::class)->getAllByChannel($channel->youtube_id);

                $videoEntityList = app(VideoService::class)->getLastByChannelWithApi($channel->youtube_id);

                foreach ($videoEntityList as $videoEntity) {

                    if (! $videoEntity || in_array($videoEntity->youtube_id, $youtubeIdList)) {
                        continue;
                    }

                    $videoRepository->create($videoEntityList->getAttributes());
                }

            } catch (Exceptions $e) {
                logger('hydrate-video ' . $video->id . ' : ' . $e->getMessage());
            }
        }
    }
}
