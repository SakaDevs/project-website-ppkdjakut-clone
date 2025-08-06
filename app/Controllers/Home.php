<?php

namespace App\Controllers;


use App\Models\LowonganModel;
use CodeIgniter\Shield\Models\UserModel;
use Config\Pager;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function jadwal(): string
    {
        return view('jadwal');
    }
    
}
