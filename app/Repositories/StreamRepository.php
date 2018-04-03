<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class StreamRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Stream";
    }

    public function getActive()
    {
        $this->resetCriteria();
        
        $this->pushCriteria(new Criterias\Selected());  

        return $this->first(); 
    }
}
