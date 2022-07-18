<?php
namespace App\Services;
use CodeIgniter\Model;
    class ProfileService extends Model {

      function select_bank_data(){

            $db = db_connect();
            $sql = "SELECT * FROM book_info";
            $query = $db->query($sql);
            $data = $query->getResult();
            return $data;
      }
      
      function select_company_data(){
            $db = db_connect();
            $sql = "SELECT * FROM company_info";
            $query = $db->query($sql);
            $data = $query->getResult();
            return $data;
      }





      }

      




?>