<?php

namespace App\Repositories;

class UserRepository extends AbstractRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\User";
    }
}
