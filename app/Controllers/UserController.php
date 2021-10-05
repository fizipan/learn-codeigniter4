<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    protected $userModel;
    
    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->findAll();

        $data = [
            'title' => 'Data User',
            'users' =>  $users,
        ];

        echo view('pages/users/index', $data);
    }
}
