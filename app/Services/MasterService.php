<?php

namespace App\Services;

use CodeIgniter\Model;



class MasterService extends Model
{

    public function insert_itemProductType($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'item_product_type', '0')";
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
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'item_collection_type', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function insert_itemProductSize($data)
    {
        try {
            $parent_id = json_encode($data['type']);
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'item_product_size', '$parent_id')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
