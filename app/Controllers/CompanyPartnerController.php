<?php

namespace App\Controllers;

use App\Services\CompanyPartnerService;


class CompanyPartnerController extends BaseController
{
    public function index()
    {
        $data = [];
        $data['customer'] = (new CompanyPartnerService())->getData_company_customer();
        return view('part_profile', $data);
    }
    public function insert()
    {
        $companycustomerservice = new CompanyPartnerService();
        $getPost = $this->request->getPost();
        // print_r($getPost);
        if($getPost['customer_type'] == 'นิติบุคคล'){
            $companycustomerservice->insertNiti($getPost);
        }elseif($getPost['customer_type'] == 'บุคคลทั่วไป'){
            $companycustomerservice->insert_nomal($getPost);
        }

        return redirect()->to(base_url('partprofile'));
        
      
    }

    public function update($id = 0)
    {
        $companycustomerservice = new CompanyPartnerService();
        $getPost = $this->request->getPost();
        // print_r($getPost);
        if($getPost['customer_type'] == 'นิติบุคคล'){
            $companycustomerservice->updateNiti($getPost, $id);
        }elseif($getPost['customer_type'] == 'บุคคลทั่วไป'){
            $companycustomerservice->update_nomal($getPost, $id);
            
        }
        return redirect()->to(base_url('partprofile'));
        
      
    }
    public function delete($id = 0)
    {
        $companycustomerservice = new CompanyPartnerService();
        $companycustomerservice->delete_customer($id);
        return redirect()->to(base_url('partprofile'));
        
      
    }
}
?>