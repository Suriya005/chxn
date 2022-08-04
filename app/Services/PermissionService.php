<?php
namespace App\Services;
use CodeIgniter\Model;
// use App\Models\PermissionModel;


    class PermissionService extends Model {
        protected $table      = 'permission';
      protected $primaryKey = 'pid';
      protected $allowedFields = ['pid', 'user_status', 'menu','menu_status'];

         public function getData()
         {
                $data = $this->findAll();
                return $data;
         }
          public function edit($data)
          {
            

            foreach($data as $key => $value){

              $this->update($key,['menu_status' => $value]);
            }
            return true;
          }

  
      }

      




