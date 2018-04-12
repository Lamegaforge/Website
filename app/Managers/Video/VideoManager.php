<?php

namespace App\Managers\Video;

use GuzzleHttp\Client;
use Illuminate\Support\Manager;

class VideoManager extends Manager
{
    /**
     * @return \App\Managers\Video\Repository
     */
    protected function createClientDriver()
    {
        $client = app('Api\Youtube');

        $config = $this->app['config']['video.drivers.client'];

        return $this->repository(new Drivers\Client($client, $config));
    }

    /**
     * @return \App\Managers\Video\Repository
     */
    protected function createMockDriver()
    {
        $config = $this->app['config']['video.drivers.mock'];

        return $this->repository(new Drivers\Mock($config));
    }

    /**
     * @param  \App\Managers\Video\Contracts\Driver $driver
     * @return \App\Managers\Video\Repository
     */
    protected function repository(Contracts\Driver $driver)
    {
        return new Repository($driver);
    }

    /**
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->app['config']['video.driver'];
    }

    /**
     * @param string $name
     * @return  void
     */
    public function setDefaultDriver($name)
    {
        $this->app['config']['video.driver'] = $name;
    }
}
