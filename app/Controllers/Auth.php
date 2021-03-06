<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    //register
    public function register()
    {

        if ($this->request->getPost()) {
            //lakukan validasi untuk data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();

            //jika tidak ada errors jalankan
            if (!$errors) {
                $userModel = new \App\Models\UserModel();
                $user = new \App\Entities\User();
                $user->username = $this->request->getPost('username');
                $user->password = $this->request->getPost('password');


                $user->created_by = 0;
                $user->created_date = date("Y-m-d H:i:s");

                $userModel->save($user);
                return view('login');
            }
            $this->session->setFlashdata('errors', $errors);
        }
        return view('register');
    }
    //login
    public function login()
    {
        if ($this->request->getPost()) {
            //lakukan validasi untuk data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'login');
            $errors = $this->validation->getErrors();

            if ($errors) {
                return view('login');
            }
            $userModel = new \App\Models\UserModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                $salt = $user->salt;
                if ($user->password !== md5($salt . $password)) {
                    $this->session->setFlashdata('errors', ['Password Salah']);
                } else {
                    $sessData = [
                        'username' => $user->usename,
                        'id' => $user->id,
                        'role' => $user->role,
                        'isLoggedIn' => TRUE
                    ];

                    $this->session->set($sessData);
                    if (session()->get('role') == 0) {
                        return redirect()->to(site_url('barang/index'));
                    } else {
                        return redirect()->to(site_url('home/index'));
                    }
                }
            } else {
                $this->session->setFlashdata('errors', ['User Tidak Ditemukan']);
            }
        }
        return view('login');
    }
    //logout
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('auth/login'));
    }
}
