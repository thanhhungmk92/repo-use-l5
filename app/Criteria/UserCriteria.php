<?php

namespace App\Criteria;

use Mi\L5Core\Contracts\CriteriaInterface;
use Mi\L5Core\Contracts\RepositoryInterface;

class UserCriteria implements CriteriaInterface
{
    protected $gender;

    public function __construct($gender)
    {
        $this->gender = $gender;
    }
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {

        if($this->gender != '') {
            return $model->where($model->qualifyColumn('gender'), $this->gender);
        }

        return $model;
    }
}
