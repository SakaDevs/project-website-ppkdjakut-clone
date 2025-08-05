<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PPKD Jakut</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/welcome.css">
    <style>
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
    </style>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col justify-center items-center">
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <?= $this->include('layout/navbar') ?> 

    <div class="w-full max-w-md mx-auto p-8 bg-white rounded-lg shadow-xl my-auto" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-light text-center text-gray-800 mb-6"><?= lang('Auth.login') ?></h2>
        <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?= esc(session('error')) ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= esc($error) ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= esc(session('errors')) ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>

                <?php if (session('message') !== null) : ?>
                    <div class="alert alert-success" role="alert"><?= esc(session('message')) ?></div>
                <?php endif ?>
        <form action="<?= url_to('login') ?>" method="post" class="space-y-6">
			<?= csrf_field() ?>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"><?=lang('Auth.email')?></label>
                <input type="login" id="email" name="email" required class="form-input" placeholder="<?= lang('Auth.email') ?>">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"><?= lang('Auth.password') ?></label>
                <input type="password" id="password" name="password" required class="form-input" placeholder="<?= lang('Auth.password') ?>">
            </div>
            
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-blue-500 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-700"><?= lang('Auth.rememberMe') ?></span>
                </label>
            </div>
                                
            <button type="submit" class="w-full bg-blue-400 text-white py-3 px-4 rounded-md hover:bg-blue-500 transition focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 font-semibold text-lg">
                <?= lang('Auth.login') ?>
            </button>
            <div class="">
                <p class="text-center text-gray-600 text-sm mb-4">Atau masuk dengan</p>
                <div class="flex justify-center gap-4">
                    <!-- Google Login -->
                    <a href="<?= base_url('oauth/google') ?>" 
                    class="flex items-center gap-2 bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg shadow hover:bg-gray-100 transition">
                        <i class="bi bi-google text-blue-500 text-lg"></i>
                        <span class="text-sm font-medium">Google</span>
                    </a>

                    <!-- GitHub Login -->
                    <a href="<?= base_url('oauth/github') ?>" 
                    class="flex items-center gap-2 bg-gray-900 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-800 transition">
                        <i class="bi bi-github text-lg"></i>
                        <span class="text-sm font-medium">GitHub</span>
                    </a>

                    <!-- Facebook Login -->
                    <a href="<?= base_url('oauth/facebook') ?>" 
                    class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                        <i class="bi bi-facebook text-lg"></i>
                        <span class="text-sm font-medium">Facebook</span>
                    </a>
                </div>
            </div>
        </form>
        <div class="flex justify-between mt-4">
            <p class="text-center text-sm text-gray-600 ">
                <a href="<?= url_to('magic-link') ?>" class="text-blue-400 hover:underline"><?= lang('Auth.forgotPassword') ?> </a>
            </p>
            <p class="text-center text-sm text-gray-600 ">
                <a href="<?= url_to('register') ?>" class="text-blue-400 hover:underline"><?= lang('Auth.needAccount') ?></a>
            </p>
        </div>
        
    </div>

    <div class="overlay"></div>

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