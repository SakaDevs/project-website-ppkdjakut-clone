<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pelatihan Regular</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="min-h-screen">
    <?php include('layout/navbar.php'); ?>

    <div class="container mx-auto px-4 py-12 mt-20 max-w-6xl">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-start">

            <div class="lg:w-1/3 w-full" data-aos="fade-right" data-aos-duration="1000">
                <div class="bg-white rounded-xl shadow-lg p-8 sticky top-28">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Keterangan</h2>
                    <p class="text-gray-600 text-sm mb-8">
                        Pelaksanaan seleksi akan diinfokan melalui whatsapp sebelum jadwal pelatihan dimulai.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-4">
                                <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-700">Lokasi Seleksi:</h3>
                                <p class="text-gray-600 text-sm">Jalan Raya Gereja Tugu No 20 Semper Barat, Cilincing, Jakarta Utara</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                             <div class="flex-shrink-0 mr-4">
                                <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-700">Email:</h3>
                                <p class="text-gray-600 text-sm">ppkdjakartautara@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                             <div class="flex-shrink-0 mr-4">
                                <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-700">Whatsapp:</h3>
                                <p class="text-gray-600 text-sm">+62 857 7927 1286</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-2/3 w-full" data-aos="fade-up" data-aos-duration="1000">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h1 class="text-2xl font-bold text-gray-800 mb-8 text-center" >
                        Formulir Pendaftaran Peserta Pelatihan
                    </h1>

                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:text-green-400" role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Success!</span> Terimakasih telah mendaftar ke PPKD Jakarta Utara
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:text-red-400" role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Error!</span> Cek kembali kelengkapan anda! 
                                </div>
                            </div>
                        <?php endif; ?>

                    <form action="<?= base_url('pelatihan/regular/daftar/success/') ?>" method="post" enctype="multipart/form-data" class="space-y-6" >
                        <?= csrf_field() ?>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" required placeholder="Masukkan Nama Lengkap"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Nomor Induk Kependudukan (NIK)</label>
                            <input type="text" name="nomor_induk_kependudukan" maxlength="16" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>
                        
                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Nomor Kartu Keluarga</label>
                            <input type="text" name="nomor_kartu_keluarga" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Jenis Kelamin</label>
                            <div class="flex items-center gap-6">
                                <select name="jns_kelamin" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                    <option value="">-- Pilih --</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Nomor Whatsapp / Telepon</label>
                            <input type="tel" name="nomor" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Pendidikan Terakhir</label>
                            <select name="pendidikan_terakhir" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option value="">-- Pilih --</option>
                                <option value="SD">SD</option><option>SMP</option><option>SMA</option>
                                <option>SMK</option><option>D1</option><option>D2</option>
                                <option>D3</option><option>D4</option><option>S1</option>
                                <option>S2</option><option>S3</option><option>PAKET A</option>
                                <option>PAKET B</option><option>PAKET C</option><option>TIDAK ADA</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Tahun Lulus</label>
                            <input type="number" name="tahun_lulus" min="1900" max="<?= date('Y') ?>" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Pekerjaan</label>
                            <select name="pekerjaan" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option value="">-- Pilih --</option>
                                <option>Pelajar/Mahasiswa</option>
                                <option>Karyawan Swasta</option>
                                <option>Mengurus Rumah Tangga</option>
                                <option>Wirausaha</option>
                                <option>PNS/Karyawan BUMN/BUMD</option>
                                <option>Belum/Tidak Bekerja</option>
                                <option>Lainnya</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Email</label>
                            <input type="email" name="email" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Minat Pelatihan</label>
                            <select name="minat_pelatihan"  required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option value="">-- Pilih --</option>
                                <option>Bahasa Inggris Untuk Tenaga Administrasi Profesional</option>
                                <option>Pemasangan Instalasi Otomasi Listrik Industri</option>
                                <option>Service Sepeda Motor Injeksi</option>
                                <option>Operator Excavator</option>
                                <option>Operator Forklift</option>
                                <option>Desainer Grafis Madya</option>
                                <option>Teknisi Komputer Dan Jaringan</option>
                                <option>Cyber Security</option>
                                <option>Junior Web Developer</option>
                                <option>Android Developer</option>
                                <option>Associate Data Scientist</option>
                                <option>Editor Video</option>
                                <option>Data Management Staff (Operator Komputer)</option>
                                <option>Perawatan Kecantikan (Tata Rias)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Nama Jalan</label>
                            <input type="text" name="nama_jalan" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2 font-medium text-gray-700">RT</label>
                                <input type="number" name="rt" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label class="block mb-2 font-medium text-gray-700">RW</label>
                                <input type="number" name="rw" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Kelurahan</label>
                            <select name="kelurahan" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option value="">-- Pilih Kelurahan --</option>
                                <option>Cilincing</option>
                                <option>Kalibaru</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Kecamatan</label>
                            <select name="kecamatan" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option value="">-- Pilih Kecamatan --</option>
                                <option>Cilincing</option>
                                <option>Kelapa Gading</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Kota</label>
                            <select name="kota" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option>Jakarta Utara</option>
                                <option>Jakarta Timur</option>
                                <option>Jakarta Selatan</option>
                                <option>Jakarta Pusat</option>
                                <option>Jakarta Barat</option>
                                <option>Kepulauan Seribu</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Provinsi</label>
                            <select name="provinsi" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option>DKI Jakarta</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Ukuran Baju & Sepatu</label>
                            <input type="text" name="ukuran"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Pasfoto (max 1MB)</label>
                            <input type="file" name="pas_foto" accept="image/*" required
                                class="w-full border border-gray-300 rounded-lg p-2 bg-white focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Scan KTP / Surat Domisili</label>
                            <input type="file" name="scan_ktp" accept="image/*" required
                                class="w-full border border-gray-300 rounded-lg p-2 bg-white focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Scan Kartu Keluarga</label>
                            <input type="file" name="scan_kk" accept="image/*" required
                                class="w-full border border-gray-300 rounded-lg p-2 bg-white focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Scan Ijazah</label>
                            <input type="file" name="scan_ijazah" accept="image/*" required
                                class="w-full border border-gray-300 rounded-lg p-2 bg-white focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Berkebutuhan Khusus?</label>
                            <select name="kebutuhan_khusus" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option>NON DIFABEL</option>
                                <option>TUNA RUNGU</option>
                                <option>TUNA GRAHITA</option>
                                <option>TUNA DAKSA</option>
                            </select>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LctF5wrAAAAAPVceIfrsyc6nOj-1tkrz9BReSPY"></div>

                        <div>
                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition">
                                Daftar Sekarang
                            </button>
                        </div>
                    </form> 
                </div>
            </div>
            
        </div>
    </div>
    <?php include('layout/footer.php'); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                offset: 120,
                delay: 0,
                duration: 400,
                easing: 'ease',
                once: false,
                mirror: false,
                anchorPlacement: 'top-bottom',
            });
        });
    </script>
</body>
</html>