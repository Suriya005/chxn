<?php

namespace App\Controllers;

// use App\Services\ProfileService;
use App\Services\MasterService;


class MasterController extends BaseController
{
    public function index()
    {
        return view('master');
    }

    public function insert_itemProductType()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail']
        ];
        
        $masterService->insert_itemProductType($data);
        return redirect()->to(base_url('/master'));
    }

    public function insert_itemCollection(){
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail']
        ];
        
        $masterService->insert_itemCollection($data);
        return redirect()->to(base_url('/master'));
    }

    public function item_ProductSize(){
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail']
        ];
        
        $masterService->insert_itemCollection($data);
        return redirect()->to(base_url('/master'));
    }

    
}
