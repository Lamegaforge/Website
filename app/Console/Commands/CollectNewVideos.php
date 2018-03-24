<?php

namespace App\Console\Commands;

use Exceptions;
use App\Models\Video;
use App\Services\VideoService;
use Illuminate\Console\Command;
use App\Repositories\VideoRepository;
use App\Repositories\VideoChannelRepository;

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
                
                $videoEntityList = app(VideoService::class)->getLastByChannelWithApi($channel->hash);

                foreach ($videoEntityList as $videoEntity) {

                    $alreadyRegistered = $videoRepository->findWhere(['hash', $videoEntity->hash]);

                    if ($alreadyRegistered->isNotEmpty()) {
                        continue;
                    }

                    $attributes = $videoEntity->getAttributes();

                    $attributes['video_channel_id'] = $channel->id;

                    $videoRepository->create($attributes);
                }

            } catch (Exception $e) {
                logger('hydrate-video ' . $video->id . ' : ' . $e->getMessage());
            }
        }
    }
}
