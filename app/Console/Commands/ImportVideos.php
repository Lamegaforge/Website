<?php

namespace App\Console\Commands;

use Exception;
use File;
use Illuminate\Console\Command;
use App\Repositories\VideoRepository;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class ImportVideos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:import {filePath}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importe des vidéos depuis un fichier';

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
        $filePath = storage_path($this->argument('filePath'));

        $listHash = $this->getFileContent($filePath);

        if (! $listHash || ! is_array($listHash)) {
            throw new Exception("Pas de résultat");
        }

        $alreadyRegistered = $videoRepository->all();

        $hashAlreadyRegistered = $alreadyRegistered-pluck('hash');

        foreach ($listHash as $hash) {

            if (in_array($hash, $hashAlreadyRegistered)) {
                continue;
            }

            $attributes = [
                'hash' => $hash,
                'online' => false,
            ];

            $videoRepository->create($attributes);
        }
    }

    protected function getFileContent($path)
    {
        try
        {
            $content = \File::get($path);

            return explode(',', $content);
        }
        catch (FileNotFoundException $exception)
        {
            throw new Exception("The file doesn't exist");
        }        
    }
}
