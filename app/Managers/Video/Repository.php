<?php

namespace App\Managers\Video;

use App\Managers\Video\Contracts;

class Repository
{
    protected $driver;

    /**
     * @param \App\Managers\Video\Contracts\Driver $driver
     */
    public function __construct(Contracts\Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @param  string $hash
     * @return \App\Entities\Video|null
     */
    public function find($hash)
    {
        return $this->driver->find($hash);
    }

    /**
     * @param  string  $hash
     * @param  integer $limit
     * @return array|null
     */
    public function findByChannel($hash, $limit = 50)
    {
        return $this->driver->findByChannel($hash, $limit);        
    }
}
