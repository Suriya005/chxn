<?php

namespace App\Controllers;

// use App\Services\ProfileService;
use App\Services\PermissionService;


class PermissionController extends BaseController
{
    public function index()
    {
        $service = new PermissionService();
        $permission = $service->getData();
        $data['allpermission'] = [];
        foreach($permission as $key => $value){
            
            $data['allpermission'][$value['user_status']][$value['menu']] = [
                'pid' => $value['pid'],
                'menu_status' => $value['menu_status'],
            
            ];
        }
        
        
        return view('permission', $data);
      
    }

    public function edit()
    {
        $data = $this->request->getPost();
        $service = new PermissionService();
        $service->edit($data);
        return redirect()->to(base_url('permission'));
    }
}
?>