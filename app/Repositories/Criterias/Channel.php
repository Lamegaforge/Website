<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class Channel implements CriteriaInterface {

    protected $slugName;

    public function __construct($slugName)
    {
        $this->slugName = $slugName;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $model->where('video_channel_id', function($request){
            $request->selectRaw('id FROM video_channels WHERE slug_name = ?', [$this->slugName]);
        });

        return $model;
    }
}
