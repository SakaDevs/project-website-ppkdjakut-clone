<?php

namespace App\Controllers;

use App\Models\LowonganDaftar;
use App\Models\LowonganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Lowongans extends BaseController
{
    protected $lowonganModel;

    public function __construct()
    {
        $this->lowonganModel = new LowonganModel();
    }
    public function lowongan(): string{
        $lowongan = new LowonganModel();
        $data = [
            'lowongan' => $lowongan->asArray()->paginate(9, 'group1'),
            'pager' => $lowongan->pager,
        ];
        return view('lowongan/lowongan', $data);
    }
    public function findbyid($id): string
    {

        $detail = $this->lowonganModel->where('id', $id)->first();
        
        return view('lowongan/detail', compact('detail'));
    }
    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $lowonganModel = new LowonganModel();

        if ($keyword) {
            $lowonganModel = $lowonganModel
                ->like('judul_lowongan', $keyword, 'both')
                ->orLike('detail_lengkap', $keyword, side: 'both')
                ->orLike('nama_perusahaan', $keyword, 'both');
        }
        $data = [
            'lowongan' => $lowonganModel->asArray()->paginate(9, 'group1'),
            'pager' => $lowonganModel->pager,
        ];

        return view('lowongan/lowongan', $data);
    }   
    public function tambah()
    {
        return view ('lowongan/tambah');
    }   
    public function simpan()
    {
        $data = [
            'judul_lowongan'      => $this->request->getPost('judul_lowongan'),
            'detail_lengkap'      => $this->request->getPost('detail_lengkap'),
            'nama_perusahaan'     => $this->request->getPost('nama_perusahaan'),
            'deskripsi_singkat'   => $this->request->getPost('deskripsi_singkat'),
        ];


        $foto = $this->request->getFile('gambar_poster');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newname = $foto->getRandomName();
            $foto->move('uploads/foto_lowongan/', $newname);
            $data['gambar_poster'] = $newname;
        }

        $lowonganModel = new LowonganModel();
        $lowonganModel->insert($data);

        return redirect()->to('/lowongan')->with('success', 'Lowongan berhasil ditambahkan');
    }
    public function edit($id)
    {
        $lowonganModel = new LowonganModel();
        $data['lowongan'] = $lowonganModel->find($id);
        if (!$data['lowongan']) {
            return redirect()->to('/lowongan')->with('error','');
        }
        return view('lowongan/edit', compact('data'));
    }
    public function update($id){
        $lowonganModel = new LowonganModel();
        $data = $this->request->getPost();

        $foto = $this->request->getFile('gambar_poster');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
        $newname = $foto->getRandomName();
        $foto->move('uploads/foto_lowongan/', $newname);
        $data['gambar_poster'] = $newname;
        }
        $lowonganModel->update($id, $data);
        return redirect()->to('/lowongan')->with('success', 'Lowongan berhasil diubah');
    }
    public function delete($id) {
        $lowonganModel = new LowonganModel();
        $lowongan = $lowonganModel->find($id);
        if ($lowongan && isset($lowongan['gambar_poster'])) {
            $gambar = '/uploads/foto_lowongan/' . $lowongan['gambar_poster'];
            $path = FCPATH . $gambar;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $lowonganModel->delete($id);
        return redirect()->to('/lowongan')->with('success','Lowongan Berhasil Dihapus');
    }
    public function daftar($slug) 
    {
        helper('slug');

        $lowonganModel = new LowonganModel();
        $semuaLowongan = $lowonganModel->findAll();

        $judul = null;

        foreach($semuaLowongan as $lowongan) {
            if (slugify($lowongan['judul_lowongan'])=== $slug) {
                $judul = $lowongan;
                break;
                
            }
        }
        return view('lowongan/daftar', compact('judul'));
    }
    public function daftarSuccess()
    {
        
        $namaLengkap = $this->request->getPost('nama_lengkap');
        $data = [
            'nama_lengkap' => $namaLengkap,
            'nama_lowongan' => $this->request->getPost('nama_lowongan'),
            'nomor_ktp' => $this->request->getPost('nomor_ktp'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
        ];
        
        $folderName = preg_replace('/[^a-zA-Z0-9_-]/', '_', strtolower($namaLengkap));
        $basePath = FCPATH . 'uploads/foto_lowongan_daftar/' . $folderName;

        $fotoFields = ['surat_permohonan', 'cv', 'sertifikat'];
        foreach($fotoFields as $field) {
            $file = $this->request->getFile($field);
            
            if ($file && $file->isValid() && !$file->hasMoved()) {
                if ($file->getSize() > 2 * 1024 * 1024) {
                    return redirect()->back()->with('error', ucfirst(str_replace('_', ' ', $field)) . ' maksimal 2MB.');
                }
                $allowedExt = ['jpg', 'jpeg', 'png', 'pdf'];
                if (!in_array(strtolower($file->getExtension()), $allowedExt)) {
                    return redirect()->back()->with('error', 'Format file ' . $field . ' harus JPG, PNG, atau PDF.');
                }
                $newName = $field . '_' . time() . $file->getExtension();
                $randomName = $file->getRandomName();
                $file->move($basePath, $newName);
                $data[$field] = $randomName;
            }
        }
        $lowonganModel = new LowonganDaftar();
        $lowonganModel->insert($data);
        return redirect()->to('/lowongan')->with('success', 'pendaftaran berhasil');
    }
}
