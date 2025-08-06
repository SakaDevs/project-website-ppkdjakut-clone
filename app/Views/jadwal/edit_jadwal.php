<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Lowongan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .btn-primary {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #4338ca 0%, #6d28d9 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
    </style>
</head>
<?= view('layout/navbar.php'); ?>
<body class="min-h-screen">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-xl border border-gray-100 justify-center mt-20" data-aos="fade-up" duration="1000">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Tambah Jadwal Baru</h2>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('jadwal/update/' . $data['id']) ?>" method="post" enctype="multipart/form-data">
             <div class="mb-4">
                <label class="block font-medium text-gray-700">Judul Jadwal</label>
                <input type="text" name="nama_program" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $data['nama_program']?>" required>
            </div>
        
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Angkatan</label>
                <input type="number" min="1" max="5" name="angkatan" class="w-full p-3 border border-gray-300 rounded-xl" required value="<?=$data['angkatan']?>">
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Tutup Pendaftaran</label>
                <input type="date" name="tutup_pendaftaran" rows="5" class="w-full p-3 border border-gray-300 rounded-xl" required value="<?=$data['tutup_pendaftaran']?>"></input type="date">
            </div>
            
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Mulai Seleksi</label>
                <input type="date" name="mulai_seleksi" rows="5" class="w-full p-3 border border-gray-300 rounded-xl" required value="<?=$data['mulai_seleksi']?>"></input type="date">
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Akhir Seleksi</label>
                <input type="date" name="akhir_seleksi" class="w-full p-3 border border-gray-300 rounded-xl"  required value="<?=$data['akhir_seleksi']?>">
            </div>
            
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Mulai Pelatihan</label>
                <input type="date" name="mulai_pelatihan" class="w-full p-3 border border-gray-300 rounded-xl" required value="<?=$data['mulai_pelatihan']?>">
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Akhir Pelatihan</label>
                <input type="date" name="akhir_pelatihan" class="w-full p-3 border border-gray-300 rounded-xl" required value="<?=$data['akhir_pelatihan']?>">
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Awal Uji Kompetensi</label>
                <input type="date" name="awal_kompetensi" class="w-full p-3 border border-gray-300 rounded-xl" required value="<?=$data['awal_kompetensi']?>">
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Akhir Uji Kompetensi</label>
                <input type="date" name="akhir_kompetensi" class="w-full p-3 border border-gray-300 rounded-xl" required value="<?=$data['akhir_kompetensi']?>">
            </div>

            <div class="flex justify-between">
                <button type="submit" class="btn-primary text-white px-6 py-3 rounded-2xl font-medium">Simpan</button>
                <a href="<?= base_url('jadwal') ?>" class="text-gray-600 hover:underline self-center">Batal</a>
            </div>
        </form>
    </div>
    <?= view('layout/footer.php'); ?>
       <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
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
