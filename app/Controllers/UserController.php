<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\Request;

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

        return view('pages/users/index', compact('users'));
    }

    public function create()
    {
        return view('pages/users/create');
    }

    public function store()
    {
        $data = $this->request->getVar();
        $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $this->userModel->save($data);

        return redirect()->to('users');
    }

    public function show($id)
    {
        $user = $this->userModel->find($id);

        return view('pages/users/show', compact('user'));
    }

    public function destroy($id)
    {
        $this->userModel->delete($id);

        return redirect()->route('users');
    }
}
