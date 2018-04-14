<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Repositories\Criterias;

class VideoRepository extends AbstractRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Video";
    }

    public function getOnlineByCriterias(Request $request)
    {
        $this->resetCriteria();

        $this->pushCriteria(new Criterias\OrderBy($request->get('sort')));

        if ($channel = $request->get('channel')) {

            $this->pushCriteria(new Criterias\Channel($channel));
        }

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

    public function getLastOnlineRandomByChannel($slugName, $limit = 5)
    {
        $this->resetCriteria();
        
        $this->pushCriteria(new Criterias\Channel($slugName));  
        $this->pushCriteria(new Criterias\Online());  
        $this->pushCriteria(new Criterias\Limit($limit)); 
        $this->pushCriteria(new Criterias\OrderBy('published_at'));        

        return $this->get();         
    } 

    public function getLastOnlineWithoutPaginator($limit = 1)
    {
        $this->resetCriteria();

        $this->commonLastOnline();  

        $this->pushCriteria(new Criterias\Limit($limit));

        return ($limit > 1) ? $this->get() : $this->first() ;
    }    
}
