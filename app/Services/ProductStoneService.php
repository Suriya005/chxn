<?php
namespace App\Services;
use CodeIgniter\Model;
    class ProductStoneService extends Model {

        public function getData(){
        $gem_data = [];
        $db = db_connect();
        $sql_gem_group = "SELECT * FROM master_product where master_type = 'gem_group'";
        $query_gem_group = $db->query($sql_gem_group);
        $gem_data['gem_group'] = $query_gem_group->getResult();
        $sql_gem_name = "SELECT * FROM master_product where master_type = 'gem_name'";
        $query_gem_name = $db->query($sql_gem_name);
        $gem_data['gem_name'] = $query_gem_name->getResult();
        $sql_gem_shape = "SELECT * FROM master_product where master_type = 'gem_shape'";
        $query_gem_shape = $db->query($sql_gem_shape);
        $gem_data['gem_shape'] = $query_gem_shape->getResult();
        $sql_gem_color = "SELECT * FROM master_product where master_type = 'gem_color'";
        $query_gem_color = $db->query($sql_gem_color);
        $gem_data['gem_color'] = $query_gem_color->getResult();
        $sql_gem_clarity = "SELECT * FROM master_product where master_type = 'gem_clarity'";
        $query_gem_clarity = $db->query($sql_gem_clarity);
        $gem_data['gem_clarity'] = $query_gem_clarity->getResult();
        $gem_gem_cutting = "SELECT * FROM master_product where master_type = 'gem_cutting'";
        $query_gem_cutting = $db->query($gem_gem_cutting);
        $gem_data['gem_cutting'] = $query_gem_cutting->getResult();
        $gem_gem_quality = "SELECT * FROM master_product where master_type = 'gem_quality'";
        $query_gem_quality = $db->query($gem_gem_quality);
        $gem_data['gem_quality'] = $query_gem_quality->getResult();
        // item_product_size
        $sql_item_product_size = "SELECT * FROM master_product where master_type = 'item_product_type' group by master_name";
        $query_item_product_size = $db->query($sql_item_product_size);
        $gem_data['item_product_type'] = $query_item_product_size->getResult();
        return $gem_data;

      }

      public function table_data(){
        $db = db_connect();
        $sql = "SELECT * FROM product_data";
        $query = $db->query($sql);
        $data = $query->getResult();
        return $data;
      }

      public function insertData($data){
            $raw = [
                'stone_code' => $data['stonecode'],
                'product_group' => $data['product_group'],
                'product_name' => $data['product_name'],
                'product_shape' => $data['product_shape'],
                'product_color' => $data['product_color'],
                'product_clarity' => $data['product_clarity'],
                'product_cutting' => $data['product_cutting'],
                'product_quality' => $data['product_quality'],
                'product_type' => 'stone',
                'product_description' => $data['detail'],
                'product_size' => json_encode($data['size'], JSON_UNESCAPED_UNICODE) ,

            ];
            $db = db_connect();
            $sql = "INSERT INTO product_data (stone_code, product_group, product_name, product_shape, product_color, product_clarity, product_cutting, product_quality, product_type, product_description, product_size) VALUES ('$raw[stone_code]', $raw[product_group], '$raw[product_name]', '$raw[product_shape]', '$raw[product_color]', '$raw[product_clarity]', '$raw[product_cutting]', '$raw[product_quality]', '$raw[product_type]', '$raw[product_description]', '$raw[product_size]')";
            $db->query($sql);
            return true;
        }
      

        public function deleteData($id){
                $db = db_connect();
                $sql = "DELETE FROM product_data WHERE uid = $id";
                $db->query($sql);
                return true;
            }
      





      }

      




?>