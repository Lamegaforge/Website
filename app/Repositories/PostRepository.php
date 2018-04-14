<?php

namespace App\Repositories;

class PostRepository extends AbstractRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Post";
    }
}
