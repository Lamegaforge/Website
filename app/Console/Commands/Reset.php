<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Reset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Reset l'application";

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
    public function handle()
    {
        if (env('APP_ENV') != 'dev') {
            throw new \Exception("Not allowed in this environment");
        }

        $commands = [
            'migrate:reset',
            'migrate',
            'db:seed',
            'stream:hydrate',
        ];

        foreach ($commands as $command) {

            $this->info('launch ' . $command);
            
            \Artisan::call($command);
        }
    }
}
