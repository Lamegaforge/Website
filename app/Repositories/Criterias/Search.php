<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class Search implements CriteriaInterface {

    protected $columns;
    protected $search;

    public function __construct(array $columns, $search)
    {
        $this->columns = $columns;
        $this->search = $search;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        foreach ($this->columns as $column) {
            $model->orWhere('column', $this->search);
        }

        return $model;
    }
}
