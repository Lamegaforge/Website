<?php

namespace App\Managers\Stream;

use App\Managers\Stream\Contracts;

class Repository
{
    protected $driver;

    public function __construct(Contracts\Driver $driver)
    {
        $this->driver = $driver;
    }

    public function callBySlugName($slugName)
    {
    	return $this->driver->callBySlugName($slugName);
    }
}
