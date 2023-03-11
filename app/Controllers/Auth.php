<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $is_user = $this->userModel->findUser($email);
        // dd($is_user);
        if (!$is_user) {
            return redirect()->back()->with('error', 'Email atau Password Salah!');
        }

        if (!password_verify($password, $is_user['password'])) {
            return redirect()->back()->with('error', 'Email atau Password Salah!');
        }

        $data = [
            'uniqid' => uniqid(),
            'id' => $is_user['id'],
            'name' => $is_user['name'],
            'isLogin' => true,
        ];

        session()->set($data);
        return redirect()->to('invoice');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/');
    }
}
