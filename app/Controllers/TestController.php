<?php

namespace App\Controllers;

// use CodeIgniter\Model;
// use CodeIgniter\Services;
class TestController extends BaseController
{
    public function test()
    {
        // $Companyinfo = new \App\Services\CalVatService;
        // print_r($Companyinfo->get_info());
        $data = [
            'company_name' => $this->request->getVar('company_name'),
            'company_number' => $this->request->getVar('company_number'),
            'company_address' => $this->request->getVar('company_address'),
            'province' => $this->request->getVar('province'),
            'distric' => $this->request->getVar('distric'),
            'sub_distric' => $this->request->getVar('sub_distric'),
            'posnum' => $this->request->getVar('posnum'),
            'email' => $this->request->getVar('email'),
            'lindid' => $this->request->getVar('lindid'),
            'namecontrac' => $this->request->getVar('namecontrac'),
            'tel' => $this->request->getVar('tel'),
        ];
        print_r($data);
    }
}
?>