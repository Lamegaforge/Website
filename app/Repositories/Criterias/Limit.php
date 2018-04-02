<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class Limit implements CriteriaInterface {

	protected $limit;

	public function __construct($limit)
	{
		$this->limit = $limit;
	}

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->limit($this->limit);

        return $model;
    }
}
