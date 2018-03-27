<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class OrderBy implements CriteriaInterface {

    protected $sort;

    public function __construct($sort)
    {
        $this->sort = $sort;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->orderByDesc($this->handle());

        return $model;
    }

    protected function handle()
    {
        switch ($this->sort) {
            case 'rate':
                return 'like_count';
            break;
            case 'view':
                return 'view_count';
            break;
            default:
                return 'published_at';
            break;
        }
    }
}
