<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use App\Managers\Video\VideoManager;
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
        $videos = $videoRepository->get();

        foreach ($videos as $video) {

            try {
                
                $params = [];

                $videoEntity = app(VideoManager::class)->find($video->hash);

                $params['online'] = false;

                if ($videoEntity) {

                    $params['online'] = true;

                    $params = array_merge($videoEntity->getAttributes(), $params);
                    
                    unset($params['hash']);
                }

                $videoRepository->update($params, $video->id);

            } catch (Exception $e) {
                logger('hydrate-video ' . $video->id . ' : ' . $e->getMessage());
            }
        }
    }
}
