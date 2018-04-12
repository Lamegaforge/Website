<?php

namespace App\Managers\Video\Drivers;

use App\Entities;
use Carbon\Carbon;
use App\Managers\Video\Contracts\Driver;

class Mock implements Driver
{
    const MIN = 1;
    const MAX = 1000

    protected $config;
    protected $faker;

    public function __construct(array $config, $faker)
    {
        $this->config = $config;
    }

    public function find($hash)
    {
        return new Entities\Video($this->getParams($hash));
    }

    public function findByChannel($hash, $limit = 50)
    {
        return array_map(function($hash){

            return new Entities\Video($this->getParams($hash));

        }, $this->config['list_hash']);
    }

    protected function getParams($hash) 
    {
        return [
            'hash' => $hash,
            'title' => $this->faker->realText(20),
            'view_count' => $this->faker->numberBetween(Mock::MIN, Mock::MAX),
            'like_count' => $this->faker->numberBetween(Mock::MIN, Mock::MAX),
            'dislike_count' => $this->faker->numberBetween(Mock::MIN, Mock::MAX),
            'duration' => null,
            'published_at' => Carbon::now(),
            'description' => $this->faker->realText(60),
        ];
    }
}
