<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use CodeIgniter\HTTP\ResponseInterface;

class Jadwal extends BaseController
{
    public function index()
    {
        $jadwal = (new JadwalModel())->findAll();
        return view("jadwal", compact("jadwal"));
    }
    public function delete($id)
    {
        $jadwalModel = new JadwalModel();

        $jadwalModel->delete($id);
        return redirect()->to('/jadwal')->with('success','Lowongan Berhasil Dihapus');

    }
    public function tambah()
    {
        return view('tambah_jadwal');
    }

    public function simpan()
    {
        $data = [
            'nama_program' => $this->request->getPost('nama_program'),
            'angkatan' => $this->request->getPost('angkatan'),
            'tutup_pendaftaran' => $this->request->getPost('tutup_pendaftaran'),
            'mulai_seleksi' => $this->request->getPost('mulai_seleksi'),
            'akhir_seleksi' => $this->request->getPost('akhir_seleksi'),
            'mulai_pelatihan' => $this->request->getPost('mulai_pelatihan'),
            'akhir_pelatihan' => $this->request->getPost('akhir_pelatihan'),
            'awal_kompetensi' => $this->request->getPost('awal_kompetensi'),
            'akhir_kompetensi' => $this->request->getPost('akhir_kompetensi'),
        ];

        $jadwalModel = new JadwalModel();
        $jadwalModel->insert($data);
        return redirect()->to('/jadwal')->with('success','Lowongan Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $jadwalModel = new jadwalModel();
        $data = $jadwalModel->find($id);

        return view('edit_jadwal', compact('data'));
    }
    public function update($id)
    {
        $jadwalModel = new jadwalModel();
        $data = $this->request->getPost();
        $jadwalModel->update($id, $data);
        return redirect()->to('jadwal')->with('success','');
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $jadwalModel = new jadwalModel();

        if ($keyword) {
            $jadwal = $jadwalModel
            ->like('nama_program', $keyword, 'both')
            ->orlike('angkatan', $keyword, 'both')
            ->findAll();
        } else {
            $jadwal = $jadwalModel->findAll(); 
        }
        return view('jadwal', ['jadwal'=>$jadwal]);
    }
}
