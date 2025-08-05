<?php

namespace App\Controllers;
use App\Models\PelatihanModel;
use App\Controllers\BaseController;
use App\Models\PelatihanRegularModel;
use App\Models\Regulerdaftar;
use CodeIgniter\HTTP\ResponseInterface;

class PelatihanRegularController extends BaseController
{
    public function reguler()
    {
        $pelatihan = (new PelatihanRegularModel())->findAll();
        return view('pelatihan_reguler', compact('pelatihan'));
    }
    public function tambah()
    {
        return view('pelatihan_reguler_tambah');
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
            $foto->move('uploads/foto_pelatihan_reguler' , $newname);
            $data['gambar'] = $newname;
        }
        $pelatihan = new PelatihanRegularModel();
        $pelatihan->insert($data);
        return redirect('pelatihan/regular');
        
    }

    public function edit($id)
    {
        $pelatihanModel = new PelatihanRegularModel();
        $data['pelatihan'] = $pelatihanModel->find($id);
        if (!$data['pelatihan']) {
            return redirect()->to('/')->with('error','');
        }
        return view('pelatihan_reguler_edit', compact('data'));
    }
    public function delete($id)
    {
        $pelatihan = new PelatihanRegularModel();
        $latihan = $pelatihan->find($id);

        if ($latihan && isset($latihan['gambar'])) {
            $gambar = '/uploads/foto_pelatihan_reguler/' . $latihan['gambar'];
            $path = FCPATH . $gambar;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $pelatihan->delete($id);
        return redirect()->to('pelatihan/regular');
    }
    public function save($id)
    {
        $pelatihan = new PelatihanRegularModel();
        $data = $this->request->getPost();
        
        $foto = $this->request->getFile('gambar');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newname = $foto->getRandomName();
            $foto->move('uploads/foto_pelatihan_reguler/', $newname);
            $data['gambar'] = $newname;
            }
        $pelatihan->update($id, $data);
        return redirect()->to('pelatihan/regular');
    }
    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $pelatihan = new PelatihanRegularModel();

        if ($keyword) {
            $search = $pelatihan
            ->like('jenis_pelatihan',$keyword, 'both')
            ->orLike('nama_pelatihan', $keyword, 'both')
            ->findAll();
        } else {
            $search = $pelatihan->findAll();
        }
        return view('pelatihan_reguler', ['pelatihan' => $search]);
    }
    public function daftar()
    {
        return view('pelatihan_reguler_daftar');
    }
    public function daftarSave()
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
        'nomor_induk_kependudukan' => $this->request->getPost('nomor_induk_kependudukan'),
        'nomor_kartu_keluarga' => $this->request->getPost('nomor_kartu_keluarga'),
        'tempat_lahir' => $this->request->getPost('tempat_lahir'),
        'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        'jns_kelamin' => $this->request->getPost('jns_kelamin'),
        'nomor' => $this->request->getPost('nomor'),
        'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
        'tahun_lulus' => $this->request->getPost('tahun_lulus'),
        'pekerjaan' => $this->request->getPost('pekerjaan'),
        'email' => $this->request->getPost('email'),
        'minat_pelatihan' => $this->request->getPost('minat_pelatihan'),
        'nama_jalan' => $this->request->getPost('nama_jalan'),
        'rt' => $this->request->getPost('rt'),
        'rw' => $this->request->getPost('rw'),
        'kelurahan' => $this->request->getPost('kelurahan'),
        'kecamatan' => $this->request->getPost('kecamatan'),
        'kota' => $this->request->getPost('kota'),
        'provinsi' => $this->request->getPost('provinsi'),
        'ukuran' => $this->request->getPost('ukuran'),
        'kebutuhan_khusus' => $this->request->getPost('kebutuhan_khusus'),
    ];
    $folderName = preg_replace('/[^a-zA-Z0-9_-]/', '_', strtolower($namalengkap));
    $basePath = FCPATH . 'uploads/foto_pendaftaran_regular/' . $folderName;

    $fotoFields = ['pas_foto', 'scan_ktp', 'scan_kk', 'scan_ijazah'];
    foreach ($fotoFields as $field) {
        $file = $this->request->getFile($field);

        if ($file && $file->isValid() && !$file->hasMoved()) {
            if ($file->getSize() > 2 * 1024 * 1024) {
                return redirect()->back()->with('error', ucfirst(str_replace('_', ' ', $field)) . ' maksimal 2MB.');
            }
            $allowedExt = ['jpg', 'jpeg', 'png', 'pdf'];
            if (!in_array(strtolower($file->getExtension()), $allowedExt)) {
                return redirect()->back()->with('error', 'Format file ' . $field . ' harus JPG, PNG, atau PDF.');
            }

            $newName = $field . '_' . time() . '.' . $file->getExtension();
            $randomName = $file->getRandomName();
            $file->move($basePath, $newName);

            $data[$field] = $randomName;
        }
    }

    $daftarModel = new Regulerdaftar();
    $daftarModel->insert($data);

    return redirect()->to('/pelatihan/regular/daftar/')->with('success', 'Pendaftaran berhasil!');
}

}