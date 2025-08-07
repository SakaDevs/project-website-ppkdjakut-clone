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
    
    public function bahasainggris() 
    {
        return view('jurusan/bahasa-inggris');
    }
    public function listrikindustri() 
    {
        return view('jurusan/listrik-industri');
    }
    public function pendingin() 
    {
        return view('jurusan/pendingin');
    }
    public function otomotif() 
    {
        return view('jurusan/otomotif');
    }
    public function excavator() 
    {
        return view('jurusan/excavator');
    }
    
}
