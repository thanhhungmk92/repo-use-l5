<?php

namespace App\Services;

use App\Criteria\UserCriteria;
use Mi\L5Core\Services\BaseService;
use App\Repositories\UserRepository;

class UserService extends BaseService
{
    protected $collectsData;

    protected $model;

    protected $handler;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Logic to handle the data
     */
    public function handle()
    {

    }

    public function getUsers()
    {
        $this->repository->pushCriteria(new UserCriteria(1));
        $data = $this->repository
            ->getAllUsers($this->data, $this->handler);
        return $data;
    }
}
