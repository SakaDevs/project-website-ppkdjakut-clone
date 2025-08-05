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
<?php include('layout/navbar.php') ?>
<body class="bg-gray-50 min-h-screen py-10 px-4">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-xl border border-gray-100 justify-center mt-20" data-aos="fade-up" duration="3000">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Tambah Pelatihan Baru</h2>
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php foreach($data as $key): ?>
        <form action="<?= base_url('pelatihan/MTU/save/' . $key['id']) ?>" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Judul Pelatihan</label>
                <input type="text" name="nama_pelatihan" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $key['nama_pelatihan'] ?>" required>
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Jenis Pelatihan</label>
                <input type="text" name="jenis_pelatihan" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $key['jenis_pelatihan'] ?>" required>
            </div>
            
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Total Hari</label>
                <input type="number" max="45" min="1" name="total_hari" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $key['total_hari']?>" required>
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Total Peserta</label>
                <input type="text" max="20" min="1" name="total_peserta" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $key['total_peserta'] ?>" required>
            </div>
            
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Tanggal</label>
                <input type="date" name="pembukaan" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $key['pembukaan']?>" required>
            </div>

            <div class="mb-6">
                <label class="block font-medium text-gray-700 mb-2">Upload Gambar</label>
                <input type="file" name="gambar" accept="image/*" class="block w-full text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-xl cursor-pointer p-2" >
            </div>

            <div class="flex justify-between">
                <button type="submit" class="btn-primary text-white px-6 py-3 rounded-2xl font-medium">Simpan</button>
                <a href="<?= base_url('lowongan') ?>" class="text-gray-600 hover:underline self-center">Batal</a>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            delay: 0,
            duration: 400,
            easing: 'ease',
            once: false,
            mirror: false,
            anchorPlacement: 'top-bottom',
        });
    </script>
</body>
</html>
