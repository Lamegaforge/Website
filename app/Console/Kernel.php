<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\HydrateVideos::class,
        Commands\CollectNewVideos::class,
        Commands\ImportVideos::class,
        Commands\HydrateStream::class,
        Commands\Reset::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(Commands\HydrateVideos::class)->hourly();
        $schedule->command(Commands\CollectNewVideos::class)->everyTenMinutes();
        $schedule->command(Commands\HydrateStream::class)->everyFiveMinutes();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
