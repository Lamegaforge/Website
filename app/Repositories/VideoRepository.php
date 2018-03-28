<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Repositories\Criterias;
use Prettus\Repository\Eloquent\BaseRepository;

class VideoRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Video";
    }

    public function getOnlineById($id)
    {
        $this->resetCriteria();

        $this->pushCriteria(new Criterias\Online());    

        return $this->find($id);
    }

    public function getLastOnline()
    {
        $this->resetCriteria();

        $this->pushCriteria(new Criterias\Online());
        $this->pushCriteria(new Criterias\OrderBy('published_at'));

        return $this->first();        
    }

    public function getOnlineByCriterias(Request $request)
    {
        $this->resetCriteria();

        $this->pushCriteria(new Criterias\OrderBy($request->get('sort')));

        if ($search = $request->get('search')) {

            $columns = ['title', 'description'];

            $this->pushCriteria(new Criterias\Search($columns, $search));        
        }    

        $this->pushCriteria(new Criterias\Online());    

        return $this->paginate();
    }

    public function getOnlineRandom($limit = 5)
    {
        $this->resetCriteria();
        
        $this->pushCriteria(new Criterias\Online());  
        $this->pushCriteria(new Criterias\Random());  
        $this->pushCriteria(new Criterias\Limit($limit)); 

        return $this->get(); 
    }    
}
