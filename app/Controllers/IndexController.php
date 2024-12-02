<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class IndexController extends BaseController
{
    public function index()
    {
        //
        return view("index");
    }

    public function dashboard()
    {
        //
        return view("dashboard");
    }

    public function about()
    {
        //
        return view("about");
    }
}
