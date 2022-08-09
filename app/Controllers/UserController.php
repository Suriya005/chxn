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
                $user = $model->where('system_name', $this->request->getVar('username'))
                    ->first();
                if ($user) {
                    if($user['role_id'] == 1){
                        $user_status = 'employee';
                    }elseif($user['role_id'] == 2){
                        $user_status = 'admin';
                    }else{
                        $user_status = 'none';
                    }
                $permission_tb = new Permission();
                // get all permission 
                $permission = $permission_tb->where('user_status', $user_status)->findAll();

                $this->setUserSession($user, $permission);
                if($user['role_id'] == "2"){

                    return redirect()->to(base_url('admin'));

                }elseif($user['role_id'] == "1"){

                    return redirect()->to(base_url('employee'));
                }
                } else {
                    $data['error'] = 'Username not found';
                    return view('login', $data);
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

        foreach($permission as $permission){
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