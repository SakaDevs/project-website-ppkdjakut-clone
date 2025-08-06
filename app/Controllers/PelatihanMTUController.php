<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mtudaftar;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PelatihanMTUModel;

class PelatihanMTUController extends BaseController
{
    public function mtu()
    {
        $pelatihan = (new PelatihanMTUModel())->findAll();;
        return view('pelatihan_MTU', compact('pelatihan'));
    }
    public function tambah()
    {
        return view('pelatihan_MTU_tambah');
    }
    public function add()
    {
        $data = [
            'nama_pelatihan' => $this->request->getPost('nama_pelatihan'),
            'jenis_pelatihan' => $this->request->getPost('jenis_pelatihan'),
            'total_hari' => $this->request->getPost('total_hari'),
            'total_peserta' => $this->request->getPost('total_peserta'),
            'pembukaan' => $this->request->getPost('pembukaan'),
        ];

        $foto = $this->request->getFile('gambar');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newname = $foto->getRandomName();
            $foto->move('uploads/foto_pelatihan_MTU' , $newname);
            $data['gambar'] = $newname;
        }
        $pelatihan = new PelatihanMTUModel();
        $pelatihan->insert($data);
        return redirect('pelatihan/MTU');
        
    }

    public function edit($id)
    {
        $pelatihanModel = new PelatihanMTUModel();
        $data['pelatihan'] = $pelatihanModel->find($id);
        if (!$data['pelatihan']) {
            return redirect()->to('/')->with('error','');
        }
        return view('pelatihan_MTU_edit', compact('data'));
    }
    public function delete($id)
    {
        $pelatihan = new PelatihanMTUModel();
        $latihan = $pelatihan->find($id);

        if ($latihan && isset($latihan['gambar'])) {
            $gambar = '/uploads/foto_pelatiha_MTU/' . $latihan['gambar'];
            $path = FCPATH . $gambar;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $pelatihan->delete($id);
        return redirect()->to('pelatihan/MTU');
    }
    public function save($id)
    {
        $pelatihan = new PelatihanMTUModel();
        $data = $this->request->getPost();
        
        $foto = $this->request->getFile('gambar');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newname = $foto->getRandomName();
            $foto->move('uploads/foto_pelatihan_reguler/', $newname);
            $data['gambar'] = $newname;
            }
        $pelatihan->update($id, $data);
        return redirect()->to('pelatihan/MTU');
    }
    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $pelatihan = new PelatihanMTUModel();

        if ($keyword) {
            $search = $pelatihan
            ->like('jenis_pelatihan',$keyword, 'both')
            ->orLike('nama_pelatihan', $keyword, 'both')
            ->findAll();
        } else {
            $search = $pelatihan->findAll();
        }
        return view('pelatihan_MTU', ['pelatihan' => $search]);
    }
    public function daftar()
    {
        return view('pelatihan_MTU_daftar');
    }
    public function saveDaftar()
    {
    $recaptchaResponse = $this->request->getPost('g-recaptcha-response');
    if (empty($recaptchaResponse)) {
        return redirect()->back()->withInput()->with('error', 'Anda harus mencentang kotak "Saya bukan robot".');
    }
    $secretKey = getenv('RECAPTCHA_SECRET_KEY');
    $client = \config\Services::curlrequest();
    $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
        'form_params' => [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
        ]
    ]);

    $body = json_decode($response->getBody());
    if (!$body->success) {
         return redirect()->back()->withInput()->with('error', 'Verifikasi reCAPTCHA gagal, silakan coba lagi.');
    }
        $namalengkap = $this->request->getPost('nama_lengkap');
        $data = [
            'nama_lengkap' => $namalengkap,
            'nomor' => $this->request->getPost('nomor'),
            'maps' => $this->request->getPost('maps'),
            'minat_pelatihan' => $this->request->getPost('minat_pelatihan')
        ];
        $folderName = preg_replace('/[^a-zA-Z0-9_-]/', '_', strtolower($namalengkap));
        $basePath = FCPATH . 'uploads/foto_pendaftaran_MTU/' . $folderName;


        $foto = $this->request->getFile('surat_permohonan');
    
        if ($foto && $foto->isValid() && !$foto->hasMoved()){
            $randomName = $foto->getRandomName();
            $foto->move($basePath, $randomName);
            $data['surat_permohonan'] = $randomName;
         };

        $pelatihan = new Mtudaftar();
        $pelatihan->insert($data);
        return redirect()->to('/pelatihan/MTU/daftar')->with('success', 'Pendaftaran berhasil!');
    }
}
