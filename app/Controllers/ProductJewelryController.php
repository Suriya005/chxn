<?php

namespace App\Controllers;

// use App\Services\ProfileService;
use App\Services\ProductJewelryService;


class ProductJewelryController extends BaseController
{
    public function index()
    {
        $service = new ProductJewelryService();
        $data = [
            'data' => $service->getData(),
            'table_data' => $service->table_data(),
        ];
        
        
        return view('productjewelry', $data);
    }

    public function insert()
    {
        $service = new ProductJewelryService();
        $data = $this->request->getPost();
        // print_r($data);
        // for($i = 0; $i < $data['count_type']; $i++){
        //     $data['size'][$data['check'.$i]] = $data['check'.$i];
        // }
        $service->insertData($data);
        return redirect()->to(base_url('/productjewelry'));
    }

    public function delete($id){
        $service = new ProductJewelryService();
        $service->deleteData($id);
        return redirect()->to(base_url('/productjewelry'));
    }

    
}
?>