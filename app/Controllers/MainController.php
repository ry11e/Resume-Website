<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MainController extends BaseController
{

    protected $helpers = ['url'];
    
    public function index()
    {
        return view('my_homepage');
    }
}
