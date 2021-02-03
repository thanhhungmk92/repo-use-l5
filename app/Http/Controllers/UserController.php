<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mi\L5Core\Services\BaseService;
use Mi\L5Core\Repositories\BaseRepository;
use App\Services\UserService;

class UserController
{
    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function getUsers(Request $request) {
        $users = $this->userService->setRequest($request)->getUsers();

        return $users;
    }

    public function upload()
    {
        return view('upload');
    }

    public function uploadPost(Request $request) {
//        $request->validate([
//            'file_csv' => 'required|mimes:csv',
//        ]);

        if($request->hasFile('file_csv')) {
            $file = $request->file_csv->getrealPath();

            if (($handle = fopen($file, 'r')) !== false) {
                while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                    dump($data);
                }
            }

            dd("no");
        }
    }
}
