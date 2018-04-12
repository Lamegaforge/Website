<?php

namespace App\Services;

use Cache;
use Config;
use App\Entities;
use GuzzleHttp\ClientInterface;
use App\Repositories\StreamRepository;

class StreamService
{
    const STREAM_SAVED = 'stream';

    protected $stream;
    protected $streamManager;
    protected $cache;

    public function __construct(StreamRepository $stream, $streamManager, $cache)
    {
        $this->stream = $stream;
        $this->streamManager = $streamManager;
        $this->cache = $cache;
    }

    /**
     * @return void
     */
    public function refreshSavedStream()
    {
        $selectedStream = $this->stream->getSelected();

        $streamEntity = $this->streamManager->callBySlugName($selectedStream->slug_name);

        if ($streamEntity) {
            return $this->saveStream($streamEntity);
        }
        
        $this->removeSavedStream();
    }

    /**
     * @return boolean
     */
    public function isOnline()
    {
        return $this->cache->has(StreamService::STREAM_SAVED);
    }

    /**
     * @return \App\Services\Entities\Stream
     */
    public function getSavedStream()
    {
        return $this->cache->get(StreamService::STREAM_SAVED);
    }

    /**
     * @param \App\Services\Entities\Stream;
     * @return void
     */
    public function saveStream(Entities\Stream $streamEntity)
    {
        $this->cache->forever(StreamService::STREAM_SAVED, $streamEntity);
    }

    /**
     * @return void
     */
    public function removeSavedStream()
    {
        $this->cache->forget(StreamService::STREAM_SAVED);        
    }
}
