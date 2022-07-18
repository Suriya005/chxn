<?php
namespace App\Models;
use CodeIgniter\Model;


    class Companyinfo extends Model{
      protected $table      = 'company_info';
      protected $primaryKey = 'uid';
      protected $allowedFields = ['company_name', 'email', 'company_register_id', 'line_id', 'company_register_address', 'line_id', 'district', 'sub_district', 'province', 'poscode', 'image_logo'];
 

      }



?>

