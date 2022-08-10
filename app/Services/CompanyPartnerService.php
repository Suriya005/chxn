<?php
namespace App\Services;
use CodeIgniter\Model;
    class CompanyPartnerService extends Model {


       
       public function insert_nomal($data)
       {
        if(isset($data['check_tex_address']) && $data['check_tex_address'] == 'on'){
            $sql = "INSERT INTO `company_customer`(`customer_id`, `customer_type`, `fullname`, `birthday`, `age`, `gender`, `email`, `tel`, `line_id`, `id_card_number`, `company_name`, `company_registation_id`, `company_branch_id`, `address`, `district`, `sub_district`, `province`, `poscode`, `additional`, `address_deliver_product`) VALUES ('$data[customer_id]', 'personal', '$data[fullname]', '$data[birthday]', '$data[age]', '$data[gender]', '$data[email]', '$data[tel]', '$data[line_id]', '$data[id_card_number]', '$data[company_name]', '$data[company_registation_id]', '$data[company_branch_id]', '$data[address_nomal]', '$data[distric]', '$data[sub_distric]', '$data[province]', '$data[posnum]', '$data[additional]', 'same_address')";
            $db = db_connect();
            $db->query($sql);


        }else{
            $sql = "INSERT INTO `company_customer`(`customer_id`, `customer_type`, `fullname`, `birthday`, `age`, `gender`, `email`, `tel`, `line_id`, `id_card_number`, `company_name`, `company_registation_id`, `company_branch_id`, `address`, `district`, `sub_district`, `province`, `poscode`, `additional`, `address_deliver_product`, `deliver_district`, `deliver_sub_district`, `deliver_province`, `deliver_poscode`) VALUES ('$data[customer_id]', 'personal', '$data[fullname]', '$data[birthday]', '$data[age]', '$data[gender]', '$data[email]', '$data[tel]', '$data[line_id]', '$data[id_card_number]', '$data[company_name]', '$data[company_registation_id]', '$data[company_branch_id]', '$data[address_nomal]', '$data[distric]', '$data[sub_distric]', '$data[province]', '$data[posnum]', '$data[additional]', '$data[address_delivery]', '$data[distric_deliver]', '$data[sub_distric_deliver]', '$data[province_deliver]', '$data[posnum_deliver]')";
            $db = db_connect();
            $db->query($sql);
        }

        
       }

       public function insertNiti($data){
        if(isset($data['check2']) && $data['check2'] == 'on'){
            $sql = "INSERT INTO `company_customer`(`customer_id`, `customer_type`, `fullname`, `birthday`, `email`, `tel`, `line_id`, `id_card_number`, `company_name`, `company_registation_id`, `company_branch_id`, `address`, `district`, `sub_district`, `province`, `poscode`, `additional`, `address_deliver_product`) VALUES ('$data[company_id]', 'company', '$data[fullname_niti]', '$data[birthday]',  '$data[email_niti]', '$data[tel_niti]', '$data[line_id]', '$data[id_card_number]', '$data[company_name]', '$data[company_registation_id]', '$data[company_branch_id]', '$data[address_niti]', '$data[distric_niti]', '$data[sub_distric_niti]', '$data[province_niti]', '$data[posnum_niti]', '$data[additional_niti]', 'same_address')";
            $db = db_connect();
            $db->query($sql);


        }else{
            $sql = "INSERT INTO `company_customer`(`customer_id`, `customer_type`, `fullname`, `birthday`, `email`, `tel`, `line_id`, `id_card_number`, `company_name`, `company_registation_id`, `company_branch_id`, `address`, `district`, `sub_district`, `province`, `poscode`, `additional`, `address_deliver_product`, `deliver_district`, `deliver_sub_district`, `deliver_province`, `deliver_poscode`) VALUES ('$data[company_id]', 'company', '$data[fullname_niti]', '$data[birthday]',  '$data[email_niti]', '$data[tel_niti]', '$data[line_id]', '$data[id_card_number]', '$data[company_name]', '$data[company_registation_id]', '$data[company_branch_id]', '$data[address_niti]', '$data[distric_niti]', '$data[sub_distric_niti]', '$data[province_niti]', '$data[posnum_niti]', '$data[additional_niti]', '$data[address_delivery_niti]', '$data[distric_deliver_niti]', '$data[sub_distric_deliver_niti]', '$data[province_deliver_niti]', '$data[posnum_deliver_niti]')";
            $db = db_connect();
            $db->query($sql);
        }


       }


       public function getData_company_customer()
       {
        $sql = "SELECT * FROM `company_partner` ";
        $db = db_connect();
        $db->query($sql);
        $result = $db->query($sql)->getResult();
        return $result;
       }

       public function updateNiti($data, $uid){
        if(isset($data['check2']) && $data['check2'] == 'on'){
            $sql = "UPDATE `company_customer` SET `customer_id`='$data[company_id]', `fullname`='$data[fullname_niti]', `birthday`='$data[birthday]', `email`='$data[email_niti]', `tel`='$data[tel_niti]', `line_id`='$data[line_id]', `id_card_number`='$data[id_card_number]', `company_name`='$data[company_name]', `company_registation_id`='$data[company_registation_id]', `company_branch_id`='$data[company_branch_id]', `address`='$data[address_niti]', `province`='$data[province_niti]', `poscode`='$data[posnum_niti]', `additional`='$data[additional_niti]', `address_deliver_product`='same_address' WHERE `uid`='$uid'";
            $db = db_connect();
            $db->query($sql);
        }else{
            $sql = "UPDATE `company_customer` SET `customer_id`='$data[company_id]', `fullname`='$data[fullname_niti]', `birthday`='$data[birthday]', `email`='$data[email_niti]', `tel`='$data[tel_niti]', `line_id`='$data[line_id]', `id_card_number`='$data[id_card_number]', `company_name`='$data[company_name]', `company_registation_id`='$data[company_registation_id]', `company_branch_id`='$data[company_branch_id]', `address`='$data[address_niti]', `province`='$data[province_niti]', `poscode`='$data[posnum_niti]', `additional`='$data[additional_niti]', `address_deliver_product`='$data[address_delivery_niti]', `deliver_district`='$data[distric_deliver_niti]', `deliver_sub_district`='$data[sub_distric_deliver_niti]', `deliver_province`='$data[province_deliver_niti]', `deliver_poscode`='$data[posnum_deliver_niti]' WHERE `uid`='$uid'";
            $db = db_connect();
            $db->query($sql);
        }
        // , `district`='$data[distric_niti]', `sub_district`='$data[sub_distric_niti]'

       }

       public function update_nomal($data, $uid){
        if(isset($data['check_tex_address']) && $data['check_tex_address'] == 'on'){
            $sql = "UPDATE `company_customer` SET `customer_id`='$data[customer_id]', `fullname`='$data[fullname]', `birthday`='$data[birthday]', `email`='$data[email]', `tel`='$data[tel]', `line_id`='$data[line_id]', `id_card_number`='$data[id_card_number]', `company_name`='$data[company_name]', `company_registation_id`='$data[company_registation_id]', `company_branch_id`='$data[company_branch_id]', `address`='$data[address_nomal]', `province`='$data[province]', `poscode`='$data[posnum]', `additional`='$data[additional]', `address_deliver_product`='same_address' WHERE `uid`='$uid'";
            $db = db_connect();
            $db->query($sql);
        }else{
            $sql = "UPDATE `company_customer` SET `fullname`='$data[fullname]', `birthday`='$data[birthday]', `email`='$data[email]', `tel`='$data[tel]', `line_id`='$data[line_id]', `id_card_number`='$data[id_card_number]', `company_name`='$data[company_name]', `company_registation_id`='$data[company_registation_id]', `company_branch_id`='$data[company_branch_id]', `address`='$data[address]', `province`='$data[province]', `poscode`='$data[posnum]', `additional`='$data[additional]', `address_deliver_product`='$data[address_delivery]', `deliver_district`='$data[distric_deliver]', `deliver_sub_district`='$data[sub_distric_deliver]', `deliver_province`='$data[province_deliver]', `deliver_poscode`='$data[posnum_deliver]' WHERE `uid`='$uid'";
            $db = db_connect();
            $db->query($sql);
        }
       }

    //    `district`='$data[distric]', `sub_district`='$data[sub_distric]',

    // delete customer
    public function delete_customer($uid){
        $sql = "DELETE FROM `company_customer` WHERE `uid`='$uid'";
        $db = db_connect();
        $db->query($sql);
    }
  
      }

      




