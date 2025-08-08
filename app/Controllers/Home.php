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
    
    public function forklift() 
    {
        return view('jurusan/forklift');
    }
    public function dgm() 
    {
        return view('jurusan/desain-grafis-madya');
    }
    public function tkj() 
    {
        return view('jurusan/teknik-komputer-jaringan');
    }
    public function jwd() 
    {
        return view('jurusan/junior-web-developer');
    }
    public function cyber() 
    {
        return view('jurusan/cyber-security');
    }
    public function jad() 
    {
        return view('jurusan/junior-android-developer');
    }
    public function datascientis() 
    {
        return view('jurusan/data-scientist');
    }
    public function editorvideo() 
    {
        return view('jurusan/editor-video');
    }
    public function dms() 
    {
        return view('jurusan/data-manajement-staff');
    }
    public function busana() 
    {
        return view('jurusan/penjahitan-busana');
    }
    public function kecantikan() 
    {
        return view('jurusan/perawatan-kecantikan');
    }
    public function barista() 
    {
        return view('jurusan/barista');
    }
    public function mdm() 
    {
        return view('jurusan/makanan-dan-minuman');
    }
     public function perhotelan() 
    {
        return view('jurusan/perhotelan');
    }
    
}
