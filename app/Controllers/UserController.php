<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\Permission;

class UserController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $model = new UserModel();
            $user = $model->where('system_name', $this->request->getVar('username'))->first();
            
            if ($user && password_verify($this->request->getVar('password'), $user['password'])) {
                if ($user['role_id'] == 'employee') {
                    $user_status = 'employee';
                } elseif ($user['role_id'] == 'admin') {
                    $user_status = 'admin';
                } else {
                    $user_status = 'none';
                }
                $permission_tb = new Permission();
                // get all permission 
                $permission = $permission_tb->where('user_status', $user_status)->findAll();
                $this->setUserSession($user, $permission);
                if ($user['role_id'] == "admin") {

                    return redirect()->to(base_url('admin'));
                } elseif ($user['role_id'] == "employee") {

                    return redirect()->to(base_url('employee'));
                }
            } else {
                $data['error'] = 'Username not found';
                return view('login', $data);
            }
        }
        // if (session()->get('role') == "employee") {
        //     return view("employee/index");
        // } else if (session()->get('role') == "admin") {
        //     return view("admin/index");
        // } else {
        //     return view("login");
        // }
    }

    private function setUserSession($user, $permission)

    {
        $data = [
            'id' => $user['uid'],
            'system_name' => $user['system_name'],
            'name' => $user['fullname'],
            'system_name' => $user['system_name'],
            'phone_no' => $user['tel'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "role" => $user['role_id'],
        ];

        foreach ($permission as $permission) {
            $data[$permission['menu']] = $permission['menu_status'];
        }


        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
