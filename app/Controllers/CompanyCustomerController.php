<?php

namespace App\Controllers;

use App\Services\CompanyCustomerService;


class CompanyCustomerController extends BaseController
{
    public function index()
    {
        $data = [];
        $data['customer'] = (new CompanyCustomerService())->getData_company_customer();
        return view('cus_profile', $data);
      
    }
    public function insert()
    {
        $companycustomerservice = new CompanyCustomerService();
        $getPost = $this->request->getPost();
        // print_r($getPost);
        if($getPost['customer_type'] == 'นิติบุคคล'){
            $companycustomerservice->insertNiti($getPost);
        }elseif($getPost['customer_type'] == 'บุคคลทั่วไป'){
            $companycustomerservice->insert_nomal($getPost);
            
        }

        return redirect()->to(base_url('cusprofile'));
        
      
    }

    public function update($id = 0)
    {
        $companycustomerservice = new CompanyCustomerService();
        $getPost = $this->request->getPost();
        // print_r($getPost);
        if($getPost['customer_type'] == 'นิติบุคคล'){
            $companycustomerservice->updateNiti($getPost, $id);
        }elseif($getPost['customer_type'] == 'บุคคลทั่วไป'){
            $companycustomerservice->update_nomal($getPost, $id);
            
        }
        return redirect()->to(base_url('cusprofile'));
        
      
    }
    public function delete($id = 0)
    {
        $companycustomerservice = new CompanyCustomerService();
        $companycustomerservice->delete_customer($id);
        return redirect()->to(base_url('cusprofile'));
        
      
    }
}
?>