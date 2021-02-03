<?php

namespace App\Repositories;

use App\Criteria\UserCriteria;
use Mi\L5Core\Repositories\BaseRepository;
use App\User;

class UserRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }

    /*
     * Find all user
     */
    public function getAllUsers($data, $handler)
    {
        $user = $this->model;
//        if ($data->has('gender')) {
//            $user = $user->where('gender', $data->get('gender'));
//        }
        return $user->all();
    }
}
