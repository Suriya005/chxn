<?php

namespace App\Services;

use CodeIgniter\Model;



class MasterService extends Model
{
    // itemProductType

    public function get_itemProductType()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'item_product_type'";
        $query = $db->query($sql);
        return $query->getResult();
    }

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

    public function edit_itemProductType($uid, $data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete_itemProductType($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // itemCollection

    public function get_itemCollection()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'item_collection'";
        $query = $db->query($sql);
        return $query->getResult();
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

    public function edit_itemCollection($uid, $data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete_itemCollection($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // itemProductSize
    public function get_itemProductSize()
    {
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


    // metal_color
    public function get_metalColor()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'metal_color'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_metalColor($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'metal_color', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_metalColor( $data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_metalColor($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // metal_name
    public function get_metalName()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'metal_name'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_metalName($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'metal_name', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_metalName($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_metalName($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // gem_group
    public function get_gemGroup()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'gem_group'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_gemGroup($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'gem_group', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_gemGroup($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_gemGroup($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }


    // gem_name
    public function get_gemName()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'gem_name'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_gemName($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'gem_name', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_gemName($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_gemName($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

     // gem_shape

    public function get_gemShape()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'gem_shape'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_gemShape($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'gem_shape', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_gemShape($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_gemShape($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // gem_color
    public function get_gemColor()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'gem_color'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_gemColor($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'gem_color', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_gemColor($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_gemColor($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // gem_clarity
    public function get_gemClarity()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'gem_clarity'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_gemClarity($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'gem_clarity', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_gemClarity($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_gemClarity($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // gem_cutting
    public function get_gemCutting()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'gem_cutting'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_gemCutting($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'gem_cutting', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_gemCutting($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_gemCutting($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // gem_quality
    public function get_gemQuality()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'gem_quality'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_gemQuality($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'gem_quality', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_gemQuality($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_gemQuality($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // gem_size
    public function get_gemSize()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'gem_size'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_gemSize($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'gem_size', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_gemSize($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_gemSize($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // other_inventory
    public function get_otherInventory()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'other_inventory'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_otherInventory($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'other_inventory', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_otherInventory($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_otherInventory($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    // other_general
    public function get_otherGeneral()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'other_general'";
        $query = $db->query($sql);
        return $query->getResult();
    }
    public function insert_otherGeneral($data)
    {
        try {
            $db = db_connect();
            $sql = "INSERT INTO master_product (master_code, master_name, master_detail, master_type, parent_id) VALUES ('$data[master_code]', '$data[master_name]', '$data[master_detail]', 'other_general', '0')";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function edit_otherGeneral($data)
    {
        try {
            $db = db_connect();
            $sql = "UPDATE master_product SET master_code = '$data[master_code]', master_name = '$data[master_name]', master_detail = '$data[master_detail]' WHERE uid = '$data[uid]'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function delete_otherGeneral($uid)
    {
        try {
            $db = db_connect();
            $sql = "DELETE FROM master_product WHERE master_id = '$uid'";
            $db->query($sql);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    

    


}
