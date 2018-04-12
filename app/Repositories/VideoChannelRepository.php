<?php

namespace App\Repositories;

class VideoChannelRepository extends AbstractRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\VideoChannel";
    }
}
