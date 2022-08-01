<?php
namespace App\Models;
use CodeIgniter\Model;


    class Permission extends Model{
      protected $table      = 'permission';
      protected $primaryKey = 'pid';
      protected $allowedFields = ['pid', 'user_status', 'menu','menu_status'];

      }



?>

