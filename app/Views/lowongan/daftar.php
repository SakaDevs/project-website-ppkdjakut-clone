<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Pelatihan MTU - PPKD Jakarta Utara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <?= view('layout/navbar.php'); ?>

    <div class="container mx-auto px-4 py-12 mt-20 max-w-7xl">
        <div class="flex justify-center">

            <div class="lg:w-2/3 w-full" data-aos="fade-up" data-aos-duration="1000">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h1 class="text-2xl font-bold text-gray-800">
                        Formulir Pendaftaran
                    </h1>

                    <h1 class="text-2xl">
                        <?= $judul['judul_lowongan'] ?>
                    </h1>

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Pendaftaran Berhasil!</span> Terima kasih telah mendaftar untuk Pelatihan MTU PPKD Jakarta Utara.
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Pendaftaran Gagal!</span> Mohon periksa kembali kelengkapan data Anda.
                            </div>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('lowongan/daftar/success/') ?>" method="post" enctype="multipart/form-data" class="space-y-6">
                        <?= csrf_field() ?>
                        
                        <input type="text" value="<?=$judul['judul_lowongan']?>" readonly class="hidden" id="nama_lowongan" name="nama_lowongan">

                        <div>
                            <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-700">Nama Lengkap (Penanggung Jawab)</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" required class="form-input w-full p-3 bg-gray-50 border border-gray-300 rounded-lg text-sm" />
                        </div>

                        <div>
                            <label for="nomor_ktp" class="block mb-2 text-sm font-medium text-gray-700">Nomor KTP</label>
                            <input type="tel" id="nomor_ktp" name="nomor_ktp" required class="form-input w-full p-3 bg-gray-50 border border-gray-300 rounded-lg text-sm" />
                        </div>

                        <div>
                            <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-700">Nomor Whatsapp / Telepon</label>
                            <input type="tel" id="nomor_hp" name="nomor_hp" placeholder="+62 812345678 " required class="form-input w-full p-3 bg-gray-50 border border-gray-300 rounded-lg text-sm" />
                        </div>

                        <div>
                            <label for="surat_permohonan" class="block mb-2 text-sm font-medium text-gray-700">KTP</label>
                            <input type="file" id="surat_permohonan" name="surat_permohonan" accept=".pdf,.jpg,.jpeg,.png" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300" />
                            <p class="mt-1 text-xs text-gray-500">Tipe file: PDF, JPG, PNG. Ukuran maksimal: 1MB.</p>
                        </div>

                        <div>
                            <label for="cv" class="block mb-2 text-sm font-medium text-gray-700">CV</label>
                            <input type="file" id="cv" name="cv" accept=".pdf,.jpg,.jpeg,.png" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300" />
                            <p class="mt-1 text-xs text-gray-500">Tipe file: PDF, JPG, PNG. Ukuran maksimal: 1MB.</p>
                        </div>
                       
                        <div>
                            <label for="sertifikat" class="block mb-2 text-sm font-medium text-gray-700">Sertifikat PPKD</label>
                            <input type="file" id="sertifikat" name="sertifikat" accept=".pdf,.jpg,.jpeg,.png" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300" />
                            <p class="mt-1 text-xs text-gray-500">Tipe file: PDF, JPG, PNG. Ukuran maksimal: 1MB.</p>
                        </div>


                        <div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-300">
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
                offset: 100,
                duration: 700,
                easing: 'ease-out-quad',
                once: true,
            });
        });
    </script>
</body>
</html>