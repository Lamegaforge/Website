<?php

namespace App\Console\Commands;

use App\Exceptions;
use App\Models\Video;
use App\Services\VideoService;
use Illuminate\Console\Command;
use App\Repositories\VideoRepository;

class HydrateVideos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:hydrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MAJ toutes les videos';

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
    public function handle(VideoRepository $videoRepository)
    {
        $videos = $videoRepository->all();

        foreach ($videos as $video) {

            try {
                
                $videoEntity = app(VideoService::class)->findWithApi($video->youtube_id);

                $params['online'] = false;

                if ($videoEntity) {

                    $params['online'] = true;

                    $params = array_merge($videoEntity->getAttributes(), $params)
                }

                $videoRepository->update($params, $video->id);

            } catch (Exceptions $e) {
                logger('hydrate-video ' . $video->id . ' : ' . $e->getMessage());
            }
        }
    }
}
