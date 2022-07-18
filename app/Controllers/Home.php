<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function profile()
    {
        return view('profile');
    }
    public function empprofile()
    {
        return view('emp_profile');
    }
    public function cusprofile()
    {
        return view('cus_profile');
    }
    public function partprofile()
    {
        return view('part_profile');
    }
    public function master()
    {
        return view('master');
    }
    public function masterproduct()
    {
        return view('masterproduct');
      
    }
    public function mastercorrection()
    {
        return view('mastercorrection');
        
    }
    public function mastersize()
    {
        return view('mastersize');
        
    }
    public function mastermetalcolor()
    {
        return view('mastermetalcolor');
        
    }
    public function mastermetalname()
    {
        return view('mastermetalname');
        
    }
    public function masterstonegroup()
    {
        return view('masterstonegroup');
        
    }
    public function masterstonename()
    {
        return view('masterstonename');
        
    }
    public function masterstoneshape()
    {
        return view('masterstoneshape');
        
    }
    public function mastergemcolor()
    {
        return view('mastergemcolor');
        
    }
    public function masterclarity()
    {
        return view('masterclarity');
        
    }
    public function mastercutting()
    {
        return view('mastercutting');
        
    }
    public function masterquality()
    {
        return view('masterquality');
        
    }
    public function mastergemsize()
    {
        return view('mastergemsize');
        
    }
    public function productstone()
    {
        return view('productstone');
        
    }
    public function productjewelry()
    {
        return view('productjewelry');
        
    }
    public function saleorderstone()
    {
        return view('/saleorder/saleorderstone');
        
    }
    public function saleorderjewelry()
    {
        return view('/saleorder/saleorderjewelry');
        
    }
    public function purchasestone()
    {
        return view('/purchase/purchasestone');
        
    }
    
    public function purchasejewelry()
    {
        return view('/purchase/purchasejewelry');
        
    }
    public function memoinstone()
    {
        return view('/memoin/memoinstone');
        
    }
    public function memoinjewelry()
    {
        return view('/memoin/memoinjewelry');
        
    }
    public function memoreturnstone()
    {
        return view('/memoreturn/memoreturnstone');
        
    }
    public function memoreturnjewelry()
    {
        return view('/memoreturn/memoreturnjewelry');
        
    }
    public function inventorypurchasejewelry()
    {
        return view('/inventory/purchasejewelry');
        
    }
    public function inventorypurchasestone()
    {
        return view('/inventory/purchasestone');
        
    }
    public function inventoryserviceorder()
    {
        return view('/inventory/serviceorder');
        
    }
    public function inventoryservicerepair()
    {
        return view('/inventory/servicerepair');
        
    }
    public function inventoryservicemounting()
    {
        return view('/inventory/servicemounting');
        
    }
    public function savingstone()
    {
        return view('/saving/savingstone');
        
    }
    public function savingjewelry()
    {
        return view('/saving/savingjewelry');
        
    }
    public function savingmounting()
    {
        return view('/saving/savingmounting');
        
    }
    public function memostone()
    {
        return view('/memo/memostone');
        
    }
    public function memojewelry()
    {
        return view('/memo/memojewelry');
        
    }
    

}
