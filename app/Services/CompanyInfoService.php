<?php
namespace App\Services;
use CodeIgniter\Model;
use App\Models\Companyinfo;
    class CompanyInfoService extends Model {
       protected $table      = 'company_info';
       protected $primaryKey = 'uid';
       protected $allowedFields = ['company_name', 'email', 'company_register_id', 'line_id', 'company_register_address', 'line_id', 'district', 'sub_district', 'province', 'poscode', 'image_logo', 'namecontrac', 'tel', 'lindid'];

      function get_info(){
            $data = $this->db->query("SELECT * from company_info")->getRowArray();
            return $data;
          }
      function insertdata($data){
          // $model = new Companyinfo();
          // $table = $model->table;
          // $primaryKey =$model->primaryKey;
          // $allowedFields = $model->asArray()->allowedFields;
          $this->insert($data);
          // print_r($table);
          // print_r($allowedFields);
        }

        function updatecompany($uid, $data){
            
            $this->update($uid, $data);
            
        }
  
      }

      




?>