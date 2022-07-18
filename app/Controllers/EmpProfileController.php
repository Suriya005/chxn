<?php

namespace App\Controllers;

use App\Services\EmpProfileService;


class EmpProfileController extends BaseController
{
    public function index()
    {
        $data = [];
        $empProfileService = new EmpProfileService();
        $data['employee'] = $empProfileService->getData();
        return view('emp_profile', $data);
      
    }
    public function insert()
    {
        // print_r("insert");
        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'tel' => $this->request->getPost('tel'),
            'system_name' => $this->request->getPost('system_name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'role_id' => $this->request->getPost('role_id'),
            'status' => '1',
            'last_update' => date('Y-m-d H:i:s'),
            'image_url' => 'image_url',
        ];
        $empProfileService = new EmpProfileService();
        $empProfileService->insertData($data);
        return redirect()->to(base_url('/emp_profile'));
      
    }

    public function update($id = 0)
    {
        $uid = $id;
        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'tel' => $this->request->getPost('tel'),
            'system_name' => $this->request->getPost('system_name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'role_id' => $this->request->getPost('role_id'),
            'status' => '1',
            'last_update' => date('Y-m-d H:i:s'),
            'image_url' => 'image_url',
        ];
        $empProfileService = new EmpProfileService();
        $empProfileService->updateData($uid, $data);
        return redirect()->to(base_url('/emp_profile'));
      
    }
}
?>