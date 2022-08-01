<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            
                $model = new UserModel();
                $user = $model->where('system_name', $this->request->getVar('username'))
                    ->first();

                // Stroing session values
                $this->setUserSession($user);
                print_r($user);
                // Redirecting to dashboard after login
                if($user['role_id'] == "2"){

                    return redirect()->to(base_url('admin'));

                }elseif($user['role_id'] == "1"){

                    return redirect()->to(base_url('employee'));
                }
            
        }
        if(session()->get('role') == "1"){
            return view("employee/index");
        }else if(session()->get('role') == "2"){
            return view("admin/index");
        }else{
            return view("login");
        }
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['uid'],
            'name' => $user['fullname'],
            'phone_no' => $user['tel'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "role" => $user['role_id'],
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}