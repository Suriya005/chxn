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
        //getpost file
        $file = $this->request->getFile('fileToUpload');
             
        //check valiadtion image
        if($file->getName() != ""){
            if($file->getExtension() == "jpg" || $file->getExtension() == "png" || $file->getExtension() == "jpeg"){
                $file->move('./uploads/empprofile');
                $filename = $file->getName();
            }else{
                echo "File is not an image";
            }
        }else{
            echo "File is not an image";
        }     
         $data = [
             'fullname' => $this->request->getPost('fullname'),
             'tel' => $this->request->getPost('tel'),
             'system_name' => $this->request->getPost('system_name'),
             'email' => $this->request->getPost('email'),
             'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
             'role_id' => $this->request->getPost('role_id'),
             'status' => '1',
             'last_update' => date('Y-m-d H:i:s'),
            //  'image_url' => $filename,
         ];
         $empProfileService = new EmpProfileService();
         $empProfileService->insertData($data);
         return redirect()->to(base_url('/empprofile'));
      
    }

    public function update($id = 0)
    {
         //getpost file
         $file = $this->request->getFile('fileToUpload');
             
         //check valiadtion image
         if($file->getName() != ""){
             if($file->getExtension() == "jpg" || $file->getExtension() == "png" || $file->getExtension() == "jpeg"){
                 $file->move('./uploads/empprofile');
                 $filename = $file->getName();
             }else{
                 echo "File is not an image";
             }
         }else{
             echo "File is not an image";
         }     
        $uid = $id;
        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'tel' => $this->request->getPost('tel'),
            'system_name' => $this->request->getPost('system_name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getPost('role_id'),
            'status' => '1',
            'last_update' => date('Y-m-d H:i:s'),
            'image_url' => $filename,
        ];
        $empProfileService = new EmpProfileService();
        $empProfileService->updateData($uid, $data);
        return redirect()->to(base_url('/empprofile'));
      
    }
    public function delete($id = 0)
    {
        $uid = $id;
        $empProfileService = new EmpProfileService();
        $empProfileService->deleteData($uid);
        return redirect()->to(base_url('/empprofile'));
      
    }
}
?>