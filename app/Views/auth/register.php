<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - PPKD Jakut</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/welcome.css">
    <style>
        /* Anda bisa memindahkan semua custom CSS dari <style> sebelumnya ke welcome.css */
        /* Contoh style untuk form input jika tidak cukup dengan Tailwind */
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem; /* p-3 px-4 */
            border-radius: 0.375rem; /* rounded-md */
            border: 1px solid #d1d5db; /* border-gray-300 */
            font-size: 1rem; /* text-base */
            color: #374151; /* text-gray-700 */
            background-color: #ffffff;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-input:focus {
            border-color: #60a5fa; /* blue-400 */
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(96, 165, 250, 0.25); /* ring-blue-400/50 */
        }
        /* Pastikan juga semua CSS untuk preloader, video popup, dan navbar mobile ada di welcome.css */
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col justify-center items-center">
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <?= $this->include('layout/navbar') ?> 

    <div class="w-full max-w-md mx-auto p-8 bg-white rounded-lg shadow-xl my-auto" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-light text-center text-gray-800 mb-6"><?=lang('Auth.register')?></h2>
         <form action="<?= url_to('register') ?>" method="post" class="space-y-6">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"><?=lang('Auth.email')?></label>
                <input type="email" id="email" name="email" required class="form-input" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
            </div>
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1"><?=lang('Auth.username')?></label>
                <input type="text" id="email" name="username" required class="form-input <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1"><?=lang('Auth.password')?></label>
                <input type="password"  name="password" required class="form-input <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
            </div>
            <div>
                <label for="pass_confirm" class="block text-sm font-medium text-gray-700 mb-1"><?=lang('Auth.repeatPassword')?></label>
                <input type="password" name="password_confirm" required class="form-input <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.passwordConfirm') ?>" autocomplete="off">
            </div>
            
            <button type="submit" class="w-full bg-blue-400 text-white py-3 px-4 rounded-md hover:bg-blue-500 transition focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 font-semibold text-lg">
                <?=lang('Auth.register')?>
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Sudah punya akun? <a href="<?= base_url('login') ?>" class="text-blue-400 hover:underline"><?= lang('Auth.login') ?></a>
        </p>
    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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