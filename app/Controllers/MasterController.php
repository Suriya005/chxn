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

    // itemProductSize
    public function insert_itemProductSize(){
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];

        if(isset($getPost['earring']) && $getPost['earring'] == "on"){
            $data['type']['earring'] = "earring";
        }
        if(isset($getPost['necklace']) && $getPost['necklace'] == "on"){
            $data['type']['necklace'] = "necklace";
        }
        if(isset($getPost['ring']) && $getPost['ring'] == "on"){
            $data['type']['ring'] = "ring";
        }
        if(isset($getPost['bangle']) && $getPost['bangle'] == "on"){
            $data['type']['bangle'] = "bangle";
        }
        if(isset($getPost['anklet']) && $getPost['anklet'] == "on"){
            $data['type']['anklet'] = "anklet";
        }
        print_r($data);
        $masterService->insert_itemProductSize($data);
        return redirect()->to(base_url('/master'));
    }

    public function get_itemProductSize(){
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_itemProductSize()
        ];
        return view('mastersize', $data);

        
    }

    public function edit_itemProductSize($uid){
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        if(isset($getPost['earring']) && $getPost['earring'] == "on"){
            $data['type']['earring'] = "earring";
        }
        if(isset($getPost['necklace']) && $getPost['necklace'] == "on"){
            $data['type']['necklace'] = "necklace";
        }
        if(isset($getPost['ring']) && $getPost['ring'] == "on"){
            $data['type']['ring'] = "ring";
        }
        if(isset($getPost['bangle']) && $getPost['bangle'] == "on"){
            $data['type']['bangle'] = "bangle";
        }
        if(isset($getPost['anklet']) && $getPost['anklet'] == "on"){
            $data['type']['anklet'] = "anklet";
        }
        $masterService->edit_itemProductSize($data);
        return redirect()->to(base_url('/mastersize'));
    }

    public function delete_itemProductSize($uid){
        $masterService = new MasterService();
        $masterService->delete_itemProductSize($uid);
        return redirect()->to(base_url('/mastersize'));
    }

    
}
