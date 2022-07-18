<?php
namespace App\Services;
use CodeIgniter\Model;

    class CalVatService extends Model {

        function get_info(){
            $data = $this->db->query("SELECT * from company_info")->getRowArray();
            return $data;
          }
          
          function cal_total_vat(){
            $data = $this->db->query("SELECT * from company_info")->getRowArray();
            return $data;
          }
        }



?>

