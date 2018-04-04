<?php

namespace App\Providers;

use Cache;
use GuzzleHttp\Client;
use App\Services\StreamService;
use App\Repositories\StreamRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("Api\Youtube", function(){
            return new \Alaouy\Youtube\Youtube(config('api.youtube.key'));
        });

        $this->app->bind(StreamService::class, function(){
            return new StreamService(
                new StreamRepository(app()),
                new Client,
                app('cache.store'),
                config('api.twitch')
            );
        });        
    }
}

