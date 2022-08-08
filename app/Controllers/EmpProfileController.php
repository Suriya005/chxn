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
        return view('empprofile', $data);
      
    }
    public function insert()
    {
        
        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'tel' => $this->request->getPost('tel'),
            'system_name' => $this->request->getPost('system_name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getPost('role_id'),
            'status' => '1',
            'last_update' => date('Y-m-d H:i:s'),
            'image_url' => $this->request->getPost('image_url'),
        ];
        $empProfileService = new EmpProfileService();
        $empProfileService->insertData($data);
        return redirect()->to(base_url('/empprofile'));
      
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
            'image_url' => $this->request->getPost('image_url'),
        ];
        $empProfileService = new EmpProfileService();
        $empProfileService->updateData($uid, $data);
        return redirect()->to(base_url('/empprofile'));
      
    }
}
?>