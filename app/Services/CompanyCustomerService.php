<?php
namespace App\Services;
use CodeIgniter\Model;
    class CompanyCustomerService extends Model {


       
       public function insert_nomal($data)
       {
        if(isset($data['check_tex_address']) && $data['check_tex_address'] == 'on'){
            $sql = "INSERT INTO `company_customer`(`customer_id`, `customer_type`, `fullname`, `birthday`, `age`, `gender`, `email`, `tel`, `line_id`, `id_card_number`, `company_name`, `company_registation_id`, `company_branch_id`, `address`, `district`, `sub_district`, `province`, `poscode`, `additional`, `address_deliver_product`) VALUES ('$data[customer_id]', 'personal', '$data[fullname]', '$data[birthday]', '$data[age]', '$data[gender]', '$data[email]', '$data[tel]', '$data[line_id]', '$data[id_card_number]', '$data[company_name]', '$data[company_registation_id]', '$data[company_branch_id]', '$data[address]', '$data[distric]', '$data[sub_distric]', '$data[province]', '$data[posnum]', '$data[additional]', 'same_address')";
            $db = db_connect();
            $db->query($sql);


        }else{
            $sql = "INSERT INTO `company_customer`(`customer_id`, `customer_type`, `fullname`, `birthday`, `age`, `gender`, `email`, `tel`, `line_id`, `id_card_number`, `company_name`, `company_registation_id`, `company_branch_id`, `address`, `district`, `sub_district`, `province`, `poscode`, `additional`, `address_deliver_product`, `deliver_district`, `deliver_sub_district`, `deliver_province`, `deliver_poscode`) VALUES ('$data[customer_id]', 'personal', '$data[fullname]', '$data[birthday]', '$data[age]', '$data[gender]', '$data[email]', '$data[tel]', '$data[line_id]', '$data[id_card_number]', '$data[company_name]', '$data[company_registation_id]', '$data[company_branch_id]', '$data[address]', '$data[distric]', '$data[sub_distric]', '$data[province]', '$data[posnum]', '$data[additional]', '$data[address_delivery]', '$data[distric_deliver]', '$data[sub_distric_deliver]', '$data[province_deliver]', '$data[posnum_deliver]')";
            $db = db_connect();
            $db->query($sql);
        }

        
       }

       public function insertNiti($data){
        if(isset($data['check2']) && $data['check2'] == 'on'){
            $sql = "INSERT INTO `company_customer`(`customer_id`, `customer_type`, `fullname`, `birthday`, `email`, `tel`, `line_id`, `id_card_number`, `company_name`, `company_registation_id`, `company_branch_id`, `address`, `district`, `sub_district`, `province`, `poscode`, `additional`, `address_deliver_product`) VALUES ('$data[customer_id]', 'company', '$data[fullname_niti]', '$data[birthday]',  '$data[email_niti]', '$data[tel]', '$data[line_id]', '$data[id_card_number]', '$data[company_name]', '$data[company_registation_id]', '$data[company_branch_id]', '$data[address]', '$data[distric]', '$data[sub_distric]', '$data[province]', '$data[posnum]', '$data[additional]', 'same_address')";
            $db = db_connect();
            $db->query($sql);


        }else{
            $sql = "INSERT INTO `company_customer`(`customer_id`, `customer_type`, `fullname`, `birthday`, `email`, `tel`, `line_id`, `id_card_number`, `company_name`, `company_registation_id`, `company_branch_id`, `address`, `district`, `sub_district`, `province`, `poscode`, `additional`, `address_deliver_product`, `deliver_district`, `deliver_sub_district`, `deliver_province`, `deliver_poscode`) VALUES ('$data[customer_id]', 'company', '$data[fullname_niti]', '$data[birthday]',  '$data[email_niti]', '$data[tel]', '$data[line_id]', '$data[id_card_number]', '$data[company_name]', '$data[company_registation_id]', '$data[company_branch_id]', '$data[address]', '$data[distric]', '$data[sub_distric]', '$data[province]', '$data[posnum]', '$data[additional]', '$data[address_delivery_niti]', '$data[distric_deliver_niit]', '$data[sub_distric_deliver_niit]', '$data[province_deliver_niit]', '$data[posnum_deliver_niit]')";
            $db = db_connect();
            $db->query($sql);
        }


       }



       
    
  
      }

      




