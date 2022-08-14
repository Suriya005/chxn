<?php
namespace App\Services;
use CodeIgniter\Model;
    class ProductJewelryService extends Model {

        public function getData(){
        $product_data = [];
        $db = db_connect();
        $sql_gem_group = "SELECT * FROM master_product where master_type = 'item_product_type'";
        $query_gem_group = $db->query($sql_gem_group);
        $product_data['item_product_type'] = $query_gem_group->getResult();
        $sql_gem_name = "SELECT * FROM master_product where master_type = 'item_collection_type'";
        $query_gem_name = $db->query($sql_gem_name);
        $product_data['item_collection'] = $query_gem_name->getResult();
        $sql_gem_shape = "SELECT * FROM master_product where master_type = 'item_product_size'";
        $query_gem_shape = $db->query($sql_gem_shape);
        $product_data['item_product_size'] = $query_gem_shape->getResult();
        $sql_gem_color = "SELECT * FROM master_product where master_type = 'metal_name'";
        $query_gem_color = $db->query($sql_gem_color);
        $product_data['metal_name'] = $query_gem_color->getResult();
        $sql_gem_clarity = "SELECT * FROM master_product where master_type = 'metal_color'";
        $query_gem_clarity = $db->query($sql_gem_clarity);
        $product_data['metal_color'] = $query_gem_clarity->getResult();
        return $product_data;

      }

      public function table_data(){
        $db = db_connect();
        $sql = "SELECT * FROM product_data where product_type = 'jewelry'";
        $query = $db->query($sql);
        $data = $query->getResult();
        return $data;
      }

      public function insertData($data){
            $raw = [
                'stone_code' => $data['stonecode'],
                'product_group' => $data['item_product_type'],
                'product_name' => $data['jewelry_name'],
                'item_collection' => $data['item_collection'],
                'product_size' => $data['item_product_size'],
                'metal_name' => $data['metal_name'],
                'product_color' => $data['metal_color'],
                'weight' => $data['weight'],
                'net_weight' => $data['net_weight'],
                'per_unit' => $data['price_per_unit'],
                'nwt_price' => $data['nwt_price'],
                'gwt_price' => $data['gwt_price'],
                'totail_price' => $data['total_price'],
                'product_description' => $data['detail'],
            ];
            $db = db_connect();
            $sql = "INSERT INTO product_data (stone_code, product_group, product_name, item_collection, product_size, metal_name, product_color, product_type, weight, net_weight, per_unit, nwt_price, gwt_price, totail_price, product_description) VALUES ('$raw[stone_code]' , '$raw[product_group]' , '$raw[product_name]' , '$raw[item_collection]' , '$raw[product_size]' , '$raw[metal_name]' , '$raw[product_color]', 'jewelry', '$raw[weight]' , '$raw[net_weight]' , '$raw[per_unit]' , '$raw[nwt_price]' , '$raw[gwt_price]' , '$raw[totail_price]' , '$raw[product_description]')";
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