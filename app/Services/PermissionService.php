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

          public function add($role)
          {
            $menu = [
              'overview' => '1',
              'profile' => '1',
              'master' => '1',
              'product' => '1',
              'sell_order' => '1',
              'service_order' => '1',
              'saving' => '1',
              'seller' => '1',
              'purchase' => '1',
              'stock' => '1',
              'finance' => '1',
            ];
            foreach($menu as $key => $value){
              $this->insert([
                'user_status' => $role,
                'menu' => $key,
                'menu_status' => $value,
              ]);
            }
          }

  
      }

      




