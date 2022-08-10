<?php

namespace App\Controllers;


use CodeIgniter\Controller;
// use App\Models\Companyinfo;
use App\Services\CompanyInfoService;
use App\Services\BankInfoService;

class CompanyController extends Controller
{

    public function insertcompany($action = "", $uid = 0)
    {
        $checktap = $this->request->getVar("checktap");
        $slotData = 0;
        if ($checktap == "bank") {

            if($action == "insert"){
                $slotData = ((count($_POST) - 4) / 5) - 2;
            }elseif($action == "update"){
                $slotData = ((count($_POST) - 6) / 5) - 2;
            }
            
            $data = [];

            for ($i = 0; $i <= $slotData; $i++) {
                $data[$i] = [
                    "typebook" => $this->request->getVar("typebook" . ($i + 1)),
                    "typebank" => $this->request->getVar("typebank" . ($i + 1)),
                    "subbank" => $this->request->getVar("subbank" . ($i + 1)),
                    "bookname" => $this->request->getVar("bookname" . ($i + 1)),
                    "booknum" => $this->request->getVar("booknum" . ($i + 1))
                ];
            }
            $service = new BankInfoService();
            foreach ($data as $key => $value) {
                $service->insertbank($value);
            }
            return redirect()->to(base_url("/profile"));
        } else {
            if($action == "update"){
                $data = [
                    "company_name" => $this->request->getVar("company_name"),
                    "company_register_id" => $this->request->getVar("company_number"),
                    "company_register_address" => $this->request->getVar("company_register_address"),
                    "province" => $this->request->getVar("province"),
                    "district" => $this->request->getVar("distric"),
                    "sub_district" => $this->request->getVar("sub_distric"),
                    "poscode" => $this->request->getVar("posnum"),
                    "email" => $this->request->getVar("email"),
                    "line_id" => $this->request->getVar("lindid"),
                    "namecontrac" => $this->request->getVar("namecontrac"),
                    "tel" => $this->request->getVar("tel"),
        
                ];
                $service = new CompanyInfoService();
                $service->updatecompany($uid, $data);
                // redirect to profile page
                return redirect()->to(base_url("/profile"));
            }else{
                $data = [
                    "company_name" => $this->request->getVar("company_name"),
                    "company_register_id" => $this->request->getVar("company_number"),
                    "company_register_address" => $this->request->getVar("company_register_address"),
                    "province" => $this->request->getVar("province"),
                    "district" => $this->request->getVar("distric"),
                    "sub_district" => $this->request->getVar("sub_distric"),
                    "poscode" => $this->request->getVar("posnum"),
                    "email" => $this->request->getVar("email"),
                    "line_id" => $this->request->getVar("lindid"),
                    "namecontrac" => $this->request->getVar("namecontrac"),
                    "tel" => $this->request->getVar("tel"),
    
                ];
                $service = new CompanyInfoService();
                $service->insertdata($data);
                // redirect to profile page
                return redirect()->to(base_url("/profile"));
            }
        }
    }
}
