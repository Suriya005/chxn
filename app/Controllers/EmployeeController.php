<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmployeeController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "1") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("employee/index");
    }
}