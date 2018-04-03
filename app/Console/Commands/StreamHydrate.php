<?php

namespace App\Console\Commands;

use Exception;
use App\Services\StreamService;
use Illuminate\Console\Command;
use App\Repositories\StreamRepository;

class StreamHydrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stream:hydrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MAJ les infos du stream';

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
    public function handle(StreamRepository $stream)
    {
        $activeStream = $stream->getActive();

        $streamEntity = app(StreamService::class)->callTwitchApi($activeStream->slug_name);

        if (! $streamEntity) {
            app(StreamService::class)->removeSavedStream();            
            return;
        }

        app(StreamService::class)->saveStream($streamEntity);
    }
}
