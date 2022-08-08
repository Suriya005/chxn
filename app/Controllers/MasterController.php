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
    // itemProductType
    public function get_itemProductType()
    {
        $db = db_connect();
        $sql = "SELECT * FROM master_product WHERE master_type = 'item_product_type'";
        $query = $db->query($sql);
        return $query->getResult();
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

    public function edit_itemProductType($uid)
    {
        $masterservice = new MasterService();
       $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail']
        ];
        $masterservice->edit_itemProductType($uid, $data);
        return redirect()->to(base_url('/master'));
    }

    public function delete_itemProductType($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_itemProductType($uid);
        return redirect()->to(base_url('/master'));
    }


    // itemCollection
    public function insert_itemCollection()
    {
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

    public function get_itemProductSize()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_itemProductSize()
        ];
        return view('mastersize', $data);
    }

    public function insert_itemProductSize()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();

        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];

        if (isset($getPost['earring']) && $getPost['earring'] == "on") {
            $data['type']['earring'] = "earring";
        }
        if (isset($getPost['necklace']) && $getPost['necklace'] == "on") {
            $data['type']['necklace'] = "necklace";
        }
        if (isset($getPost['ring']) && $getPost['ring'] == "on") {
            $data['type']['ring'] = "ring";
        }
        if (isset($getPost['bangle']) && $getPost['bangle'] == "on") {
            $data['type']['bangle'] = "bangle";
        }
        if (isset($getPost['anklet']) && $getPost['anklet'] == "on") {
            $data['type']['anklet'] = "anklet";
        }
        print_r($data);
        $masterService->insert_itemProductSize($data);
        return redirect()->to(base_url('/master'));
    }



    public function edit_itemProductSize($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        if (isset($getPost['earring']) && $getPost['earring'] == "on") {
            $data['type']['earring'] = "earring";
        }
        if (isset($getPost['necklace']) && $getPost['necklace'] == "on") {
            $data['type']['necklace'] = "necklace";
        }
        if (isset($getPost['ring']) && $getPost['ring'] == "on") {
            $data['type']['ring'] = "ring";
        }
        if (isset($getPost['bangle']) && $getPost['bangle'] == "on") {
            $data['type']['bangle'] = "bangle";
        }
        if (isset($getPost['anklet']) && $getPost['anklet'] == "on") {
            $data['type']['anklet'] = "anklet";
        }
        $masterService->edit_itemProductSize($data);
        return redirect()->to(base_url('/mastersize'));
    }

    public function delete_itemProductSize($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_itemProductSize($uid);
        return redirect()->to(base_url('/mastersize'));
    }

    // metal_color

    public function get_metalColor()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_metalColor()
        ];
        return view('metalcolor', $data);
    }
    public function insert_metalColor()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_metalColor($data);
        return redirect()->to(base_url('/metalcolor'));
    }
    public function edit_metalColor($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_metalColor($data);
        return redirect()->to(base_url('/metalcolor'));
    }
    public function delete_metalColor($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_metalColor($uid);
        return redirect()->to(base_url('/metalcolor'));
    }
    // metal_name
    public function get_metalName()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_metalName()
        ];
        return view('metalname', $data);
    }
    public function insert_metalName()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_metalName($data);
        return redirect()->to(base_url('/metalname'));
    }
    public function edit_metalName($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_metalName($data);
        return redirect()->to(base_url('/metalname'));
    }
    public function delete_metalName($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_metalName($uid);
        return redirect()->to(base_url('/metalname'));
    }

    // gem_group
    public function get_gemGroup()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_gemGroup()
        ];
        return view('gemgroup', $data);
    }
    public function insert_gemGroup()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_gemGroup($data);
        return redirect()->to(base_url('/gemgroup'));
    }
    public function edit_gemGroup($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_gemGroup($data);
        return redirect()->to(base_url('/gemgroup'));
    }
    public function delete_gemGroup($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_gemGroup($uid);
        return redirect()->to(base_url('/gemgroup'));
    }

    // gem_name
    public function get_gemName()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_gemName()
        ];
        return view('gemname', $data);
    }
    public function insert_gemName()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_gemName($data);
        return redirect()->to(base_url('/gemname'));
    }
    public function edit_gemName($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_gemName($data);
        return redirect()->to(base_url('/gemname'));
    }
    public function delete_gemName($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_gemName($uid);
        return redirect()->to(base_url('/gemname'));
    }


    // gem_shape
    public function get_gemShape()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_gemShape()
        ];
        return view('gemshape', $data);
    }
    public function insert_gemShape()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_gemShape($data);
        return redirect()->to(base_url('/gemshape'));
    }
    public function edit_gemShape($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_gemShape($data);
        return redirect()->to(base_url('/gemshape'));
    }
    public function delete_gemShape($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_gemShape($uid);
        return redirect()->to(base_url('/gemshape'));
    }

    // gem_color
    public function get_gemColor()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_gemColor()
        ];
        return view('gemcolor', $data);
    }
    public function insert_gemColor()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_gemColor($data);
        return redirect()->to(base_url('/gemcolor'));
    }
    public function edit_gemColor($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_gemColor($data);
        return redirect()->to(base_url('/gemcolor'));
    }
    public function delete_gemColor($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_gemColor($uid);
        return redirect()->to(base_url('/gemcolor'));
    }

    // gem_clarity
    public function get_gemClarity()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_gemClarity()
        ];
        return view('gemclarity', $data);
    }
    public function insert_gemClarity()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_gemClarity($data);
        return redirect()->to(base_url('/gemclarity'));
    }
    public function edit_gemClarity($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_gemClarity($data);
        return redirect()->to(base_url('/gemclarity'));
    }
    public function delete_gemClarity($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_gemClarity($uid);
        return redirect()->to(base_url('/gemclarity'));
    }

    // gem_cutting
    public function get_gemCutting()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_gemCutting()
        ];
        return view('gemcutting', $data);
    }
    public function insert_gemCutting()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_gemCutting($data);
        return redirect()->to(base_url('/gemcutting'));
    }
    public function edit_gemCutting($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_gemCutting($data);
        return redirect()->to(base_url('/gemcutting'));
    }
    public function delete_gemCutting($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_gemCutting($uid);
        return redirect()->to(base_url('/gemcutting'));
    }

    // gem_quality
    public function get_gemQuality()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_gemQuality()
        ];
        return view('gemquality', $data);
    }
    public function insert_gemQuality()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_gemQuality($data);
        return redirect()->to(base_url('/gemquality'));
    }
    public function edit_gemQuality($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_gemQuality($data);
        return redirect()->to(base_url('/gemquality'));
    }
    public function delete_gemQuality($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_gemQuality($uid);
        return redirect()->to(base_url('/gemquality'));
    }

    // gem_size
    public function get_gemSize()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_gemSize()
        ];
        return view('gemsize', $data);
    }
    public function insert_gemSize()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_gemSize($data);
        return redirect()->to(base_url('/gemsize'));
    }
    public function edit_gemSize($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_gemSize($data);
        return redirect()->to(base_url('/gemsize'));
    }
    public function delete_gemSize($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_gemSize($uid);
        return redirect()->to(base_url('/gemsize'));
    }

    // other_inventory
    public function get_otherInventory()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_otherInventory()
        ];
        return view('otherinventory', $data);
    }
    public function insert_otherInventory()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_otherInventory($data);
        return redirect()->to(base_url('/otherinventory'));
    }
    public function edit_otherInventory($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_otherInventory($data);
        return redirect()->to(base_url('/otherinventory'));
    }
    public function delete_otherInventory($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_otherInventory($uid);
        return redirect()->to(base_url('/otherinventory'));
    }

    // other_general
    public function get_otherGeneral()
    {
        $masterService = new MasterService();
        $data = [
            'getData' => $masterService->get_otherGeneral()
        ];
        return view('othergeneral', $data);
    }
    public function insert_otherGeneral()
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->insert_otherGeneral($data);
        return redirect()->to(base_url('/othergeneral'));
    }
    public function edit_otherGeneral($uid)
    {
        $masterService = new MasterService();
        $getPost = $this->request->getPost();
        $data = [
            'uid' => $uid,
            'master_code' => $getPost['code'],
            'master_name' => $getPost['name'],
            'master_detail' => $getPost['detail'],
        ];
        $masterService->edit_otherGeneral($data);
        return redirect()->to(base_url('/othergeneral'));
    }
    public function delete_otherGeneral($uid)
    {
        $masterService = new MasterService();
        $masterService->delete_otherGeneral($uid);
        return redirect()->to(base_url('/othergeneral'));
    }
}
