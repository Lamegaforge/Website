<?php

namespace App\Repositories;

class StreamRepository extends AbstractRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Stream";
    }

    public function getSelected()
    {
        $this->resetCriteria();
        
        $this->pushCriteria(new Criterias\Selected());  

        return $this->first(); 
    }
}
