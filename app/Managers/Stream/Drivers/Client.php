<?php

namespace App\Managers\Stream\Drivers;

use App\Entities;
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
        $link = $this->config['url'] .
            'streams/' .
            $slugName .
            '?client_id=' . $this->config['key'];

        $result = $this->client->request('GET', $link);

        $result = json_decode($result->getBody()->getContents(), true);

        if (! $result['stream']) {
            return null;
        }

        $params = $this->formatApiResponse($result);

        return new Entities\Stream($params);
	}

    /**
     * @param  array  $result
     * @return array
     */
    protected function formatApiResponse(array $result)
    {
        $template = $result['stream']['preview']['template'];

        $template = str_replace('{width}', 1280, $template);
        $template = str_replace('{height}', 720, $template);

        return [
            'name' => $result['stream']['channel']['name'],
            'status' => $result['stream']['channel']['status'],
            'game' => $result['stream']['game'],
            'template' => $template,
        ];
    }	
}
