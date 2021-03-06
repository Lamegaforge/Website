<?php

namespace App\Providers;

use Cache;
use Image;
use GuzzleHttp\Client;
use App\Services\UserService;
use App\Services\ImageService;
use App\Services\StreamService;
use App\Managers\Video\VideoManager;
use App\Repositories\StreamRepository;
use Illuminate\Support\Facades\Schema;
use App\Managers\Stream\StreamManager;
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
        Schema::defaultStringLength(191);
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

        $this->app->bind(StreamManager::class, function($app) {
            return with(new StreamManager(app()))->driver();
        });    

        $this->app->bind(VideoManager::class, function($app) {
            return with(new VideoManager(app()))->driver();
        });            

        $this->app->bind(ImageService::class, function($app) {
            return new ImageService();
        });  

        $this->app->bind(UserService::class, function($app) {
            return new UserService(
                app(ImageService::class), 
                config('user')
            );
        });  

        $this->app->bind(StreamService::class, function(){
            return new StreamService(
                new StreamRepository(app()),
                app(StreamManager::class),
                app('cache.store')
            );
        });    
    }
}

