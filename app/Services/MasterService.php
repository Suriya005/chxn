<?php

namespace App\Services;

use CodeIgniter\Model;



class MasterService extends Model
{

    public function insert_itemProductType($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO item_product_type (master_code, master_name, master_detail) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function insert_itemCollection($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO item_collection (master_code, master_name, master_detail) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function insert_itemProductSize($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO item_product_size (master_code, master_name, master_detail) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
