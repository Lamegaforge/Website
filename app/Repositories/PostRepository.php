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

    public function getLastOnline($limit = 1)
    {
        $this->resetCriteria();

        $this->with(['category', 'thumbnail']);

        return $this->commonLastOnline($limit);        
    }    
}
