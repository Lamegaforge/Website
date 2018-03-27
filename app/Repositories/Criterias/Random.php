<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class Random implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->inRandomOrder();

        return $model;
    }
}
