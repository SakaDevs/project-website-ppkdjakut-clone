<?php

namespace App\Controllers;

use App\Models\LowonganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Lowongans extends BaseController
{
    protected $lowonganModel;

    public function __construct()
    {
        $this->lowonganModel = new LowonganModel();
    }
    public function findbyid($id): string
    {
        $detail = $this->lowonganModel->where('id', $id)->first();
        
        return view('detail', compact('detail'));
    }
    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $lowonganModel = new LowonganModel();

        if ($keyword) {
            $lowongan = $lowonganModel
                ->like('judul_lowongan', $keyword, 'both')
                ->orLike('detail_lengkap', $keyword, side: 'both')
                ->orLike('nama_perusahaan', $keyword, 'both')
                ->findAll();
        } else {
            $lowongan = $lowonganModel->findAll();
        }

        return view('search', ['lowongan' => $lowongan]);
    }   
    public function tambah()
    {
        return view ('tambah');
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
        return view('edit', compact('data'));
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
}
