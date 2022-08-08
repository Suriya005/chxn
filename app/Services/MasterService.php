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

    
 public function get_itemProductSize(){
    $db = db_connect();
    $sql = "SELECT * FROM master_product WHERE master_type = 'item_product_size'";
    $query = $db->query($sql);
    return $query->getResult();

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

    public function edit_itemProductSize($data)
    {
        try {
            $parent_id = json_encode($data['type']);
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]', parent_id = '$parent_id' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
        
    }

    public function delete_itemProductSize($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE uid = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
