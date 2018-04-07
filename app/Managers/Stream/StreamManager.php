<?php

namespace App\Managers\Stream;

use GuzzleHttp\Client;
use Illuminate\Support\Manager;

class StreamManager extends Manager
{
    protected function createClientDriver()
    {
        $client = new Client;

        $config = $this->app['config']['stream.drivers.client'];

        return $this->repository(new Drivers\Client($client, $config));
    }

    protected function createMockDriver()
    {
        $config = $this->app['config']['stream.drivers.mock'];

        return $this->repository(new Drivers\Mock($config));
    }

    protected function repository(Contracts\Driver $driver)
    {
        return new Repository($driver);
    }

    public function getDefaultDriver()
    {
        return $this->app['config']['stream.driver'];
    }

    public function setDefaultDriver($name)
    {
        $this->app['config']['stream.driver'] = $name;
    }
}
