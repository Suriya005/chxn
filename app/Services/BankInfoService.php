<?php
namespace App\Services;
use CodeIgniter\Model;
use App\Models\Companyinfo;
    class BankInfoService extends Model {
      //  protected $table      = 'book_info';
      //  protected $primaryKey = 'uid';
      //  protected $allowedFields = ['book_info'];

      function insertbank($data){
            // print_r(count($data));
            // $this->insert($data);
            // $db = db_connect();
            // $sql = `INSERT INTO book_info (uid, book_info) VALUES (DEFAULT,'{"pid": 102, "name": "name2"}')`;
            // $db->query($sql);

            // insert
            $db = db_connect();
            $sql = "INSERT INTO book_info (uid, book_info) VALUES (DEFAULT, '".json_encode($data)."')";
            $db->query($sql);




      }
      }

      




?>