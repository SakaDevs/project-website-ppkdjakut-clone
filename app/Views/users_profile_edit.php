<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
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
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-xl border border-gray-100 justify-center mt-20" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Profile</h2>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('users/update/' . $detail->id) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Full Name</label>
                <input type="text" name="full_name" class="w-full p-3 border border-gray-300 rounded-xl" required value="<?= $detail->full_name ?> ">
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Username</label>
                <input type="text" name="username" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $detail->username ?>" required>
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Email</label>
                <input type="text" name="email" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $detail->email ?>" required>
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Phone Number</label>
                <input type="text" name="phone_number" class="w-full p-3 border border-gray-300 rounded-xl" value="<?= $detail->phone_number?>" required>
            </div>

            <div class="mb-6">
                <label class="block font-medium text-gray-700 mb-2">Foto Profile</label>
                <input type="file" name="user_image" accept="image/*" class="block w-full text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-xl cursor-pointer p-2">
            </div>

            <div class="flex justify-between">
                <button type="submit" class="btn-primary text-white px-6 py-3 rounded-2xl font-medium">Simpan</button>
                <a href="<?= base_url('users_profile/' . $detail->id)?>" class="text-gray-600 hover:underline self-center">Batal</a>
            </div>
        </form>
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
