<?php

namespace App\Controllers;

use App\Services\ProfileService;


class ProfileController extends BaseController
{
    public function index()
    {
        $profileService = new ProfileService();
        $data = [];
        $book_info = $profileService->select_bank_data();
        $company_info = $profileService->select_company_data();
        $data = [
            'book_info' => $book_info,
            'test' => 'test',
            'company_info' => $company_info,
        ];
        return view('profile', $data);
      
    }
}
?>