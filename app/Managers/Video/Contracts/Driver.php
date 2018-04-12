<?php

namespace App\Managers\Video\Contracts;

interface Driver
{
    /**
     * @param  string $hash
     * @return \App\Entities\Video|null
     */
    public function find($hash);

    /**
     * @param  string  $hash
     * @param  integer $limit
     * @return array|null
     */
    public function findByChannel($hash, $limit = 50);
}
