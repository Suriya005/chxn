<?php

namespace App\Controllers;

// use App\Services\ProfileService;
use App\Services\ProductStoneService;


class ProductStoneController extends BaseController
{
    public function index()
    {
        $service = new ProductStoneService();
        $data = [
            'data' => $service->getData(),
            'table_data' => $service->table_data(),
        ];
        
        
        return view('productstone', $data);
    }

    public function insert()
    {
        $service = new ProductStoneService();
        $data = $this->request->getPost();
        for($i = 0; $i < $data['count_type']; $i++){
            $data['size'][$data['check'.$i]] = $data['check'.$i];
        }
        // print_r(json_encode($data['size'], JSON_UNESCAPED_UNICODE) );
        $service->insertData($data);
        return redirect()->to(base_url('/productstone'));
    }

    public function delete($id){
        $service = new ProductStoneService();
        $service->deleteData($id);
        return redirect()->to(base_url('/productstone'));
    }

    
}
?>