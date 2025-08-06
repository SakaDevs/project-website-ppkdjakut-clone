<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pelatihan MTU</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class=" min-h-screen">
    <?= view('layout/navbar.php'); ?>

    <div class="container mx-auto px-4 py-12 mt-20 max-w-6xl">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-start">

            <div class="lg:w-1/3 w-full" data-aos="fade-right" data-aos-duration="1000">
                <div class="bg-white rounded-xl shadow-lg p-8 sticky top-28">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Keterangan</h2>
                    <p class="text-gray-600 text-sm mb-2">
                        Pendaftaran MTU dilakukan secara kolektif dengan mengajukan surat permohonan.
                    </p>
                    <p class="text-gray-600 text-sm mb-5">
                        Format surat permohonan dapat diunduh :
                    </p>
                    
                    <a href="/files/SuratPermohonanMTU.docx" download="SuratPermohonanMTU.docx" class="inline-block bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-5 rounded-lg transition mb-6">
                        Unduh Surat Permohonan
                    </a>

                    <p class="text-gray-600 text-sm mb-8">
                        Pelaksanaan Pelatihan akan ditetapkan setelah survey lokasi pelatihan.
                    </p>
                    
                    <div class="space-y-6 border-t border-gray-200 pt-6">
                        <div class="flex items-start">
                             <div class="flex-shrink-0 mr-4">
                                <svg class="w-6 h-6 text-cyan-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
                                <svg class="w-6 h-6 text-cyan-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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

                    <form action="<?= base_url('pelatihan/MTU/daftar/success/') ?>" method="post" enctype="multipart/form-data" class="space-y-6" >
                        <?= csrf_field() ?>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Nomor Whatsapp / Telepon</label>
                            <input type="tel" name="nomor" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block mb-2 font-medium text-gray-700">Link Kandidat Lokasi Pelatihan(Google Maps):</label>
                            <input type="text" name="maps" required
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
                            <label class="block mb-2 font-medium text-gray-700">Surat Permohonan (max 1MB)</label>
                            <input type="file" name="surat_permohonan" accept="application/pdf,image/*" required
                                class="w-full border border-gray-300 rounded-lg p-2 bg-white focus:ring-2 focus:ring-blue-500" />
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
    
    <?= view('layout/footer.php'); ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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