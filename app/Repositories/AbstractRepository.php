<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

abstract class AbstractRepository extends BaseRepository 
{
    public function getOnlineById($id)
    {
        $this->resetCriteria();

        $this->pushCriteria(new Criterias\Online());  
        $this->pushCriteria(new Criterias\Published());  

        return $this->find($id);
    }

    public function getLastOnline($limit = 1)
    {
        $this->resetCriteria();

        $this->pushCriteria(new Criterias\Published());
        $this->pushCriteria(new Criterias\Online());
        $this->pushCriteria(new Criterias\OrderBy('published_at'));

        if ($limit > 1) {
            
            $this->pushCriteria(new Criterias\Limit($limit));

            return $this->get();        
        }

        return $this->first();        
    }
}
