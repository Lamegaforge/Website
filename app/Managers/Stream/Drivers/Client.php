<?php

namespace App\Managers\Stream\Drivers;

use GuzzleHttp\ClientInterface;
use App\Managers\Stream\Contracts\Driver;

class Client implements Driver
{
	protected $client;
	protected $config;

	public function __construct(ClientInterface $client, array $config)
	{
        $this->client = $client;
        $this->config = $config;
	}

	public function callBySlugName($slugName)
	{
		die;
        $link = $this->config['url'] .
            'streams/' .
            $slugName .
            '?client_id=' . $this->config['key'];

        $result = $this->client->request('GET', $link);

        $result = json_decode($result->getBody()->getContents(), true);
dd($result);
        if (! $result['stream']) {
            return null;
        }

        $params = $this->formatApiResponse($result);

        return new Entities\Stream($params);
	}
}
