<?php

namespace App\Managers\Stream\Drivers;

use App\Entities;
use GuzzleHttp\ClientInterface;
use App\Managers\Stream\Contracts\Driver;

class Mock implements Driver
{
	protected $config;

	public function __construct(array $config)
	{
        $this->config = $config;
	}

	public function callBySlugName($slugName)
	{
        return new Entities\Stream($this->config);
	}
}
