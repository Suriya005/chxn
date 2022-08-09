<?php

namespace App\Controllers;

use App\Services\CompanyCustomerService;


class CompanyCustomerController extends BaseController
{
    public function index()
    {
        $data = [];
        $companycustomerservice = new CompanyCustomerService();
        $data['employee'] = $companycustomerservice->getData();
        return view('empprofile', $data);
      
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
        
      
    }

    public function update($id = 0)
    {
        
      
    }
}
?>