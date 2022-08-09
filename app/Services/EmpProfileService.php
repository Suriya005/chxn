<?php
namespace App\Services;
use CodeIgniter\Model;
    class EmpProfileService extends Model {
       protected $table      = 'employee';
       protected $primaryKey = 'uid';
       protected $allowedFields = ['fullname', 'tel', 'system_name', 'email', 'password', 'role_id', 'status', 'last_update', 'image_url'];

       
       public function insertData($data)
       {
           $this->insert($data);
       }
         public function getData()
         {
              return $this->findAll();
         }

         public function updateData($uid, $data)
         {
                $this->update($uid, $data);
         }

        //  delete data
        public function deleteData($uid)
        {
            $this->delete($uid);
        }
  
      }

      




