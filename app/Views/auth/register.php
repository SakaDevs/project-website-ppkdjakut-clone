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
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for form inputs to ensure consistency */
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
        /* Assuming preloader CSS is in welcome.css */
    </style>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <?= $this->include('layout/navbar') ?>

    <main class="flex-grow flex justify-center items-center overflow-auto px-4 py-8 mt-20">
        <div class="w-full max-w-3xl p-8 bg-white rounded-lg shadow-xl" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl font-light text-center text-gray-800 mb-6"><?= lang('Auth.register') ?></h2>

            <?php if (session('error') !== null) : ?>
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert"><?= esc(session('error')) ?></div>
            <?php elseif (session('errors') !== null) : ?>
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                    <?php if (is_array(session('errors'))) : ?>
                        <?php foreach (session('errors') as $error) : ?>
                            <?= esc($error) ?><br>
                        <?php endforeach ?>
                    <?php else : ?>
                        <?= esc(session('errors')) ?>
                    <?php endif ?>
                </div>
            <?php endif ?>
            <?php if (session('message') !== null) : ?>
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert"><?= esc(session('message')) ?></div>
            <?php endif ?>

            <form action="<?= url_to('register') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>

                <input type="hidden" name="provinsi" id="provinsi_name">
                <input type="hidden" name="kabupaten" id="kabupaten_name">
                <input type="hidden" name="kecamatan" id="kecamatan_name">
                <input type="hidden" name="kelurahan" id="kelurahan_name">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="full_name" name="full_name" required class="form-input <?= session('errors.full_name') ? 'border-red-500' : '' ?>" placeholder="Full Name" value="<?= old('full_name') ?>">
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1"><?= lang('Auth.username') ?></label>
                        <input type="text" id="username" name="username" required class="form-input <?= session('errors.username') ? 'border-red-500' : '' ?>" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1"><?= lang('Auth.email') ?></label>
                        <input type="email" id="email" name="email" required class="form-input <?= session('errors.email') ? 'border-red-500' : '' ?>" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    </div>
                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" required class="form-input <?= session('errors.phone_number') ? 'border-red-500' : '' ?>" placeholder="+62 (081) 234-567" value="<?= old('phone_number') ?>">
                    </div>
                </div>

                    <div>
                        <label for="provinsi" class="block text-sm font-medium text-gray-700 mb-1">Provinsi</label>
                        <select id="provinsi" required class="form-input <?= session('errors.provinsi') ? 'border-red-500' : '' ?>">
                            <option value="">-- Pilih Provinsi --</option>
                        </select>
                    </div>
                    <div>
                        <label for="kabupaten" class="block text-sm font-medium text-gray-700 mb-1">Kabupaten/Kota</label>
                        <select id="kabupaten" required class="form-input <?= session('errors.kabupaten') ? 'border-red-500' : '' ?>">
                            <option value="">-- Pilih Kabupaten/Kota --</option>
                        </select>
                </div>  
                    <div>
                        <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
                        <select id="kecamatan" required class="form-input <?= session('errors.kecamatan') ? 'border-red-500' : '' ?>">
                            <option value="">-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                    <div>
                        <label for="kelurahan" class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
                        <select id="kelurahan" required class="form-input <?= session('errors.kelurahan') ? 'border-red-500' : '' ?>">
                            <option value="">-- Pilih Kelurahan --</option>
                        </select>
                    </div>

                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                    <select id="gender" name="gender" required class="form-input <?= session('errors.gender') ? 'border-red-500' : '' ?>">
                        <option value="">-- Pilih Gender --</option>
                        <option value="Perempuan" <?= old('gender') === 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                        <option value="Laki-laki" <?= old('gender') === 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    </select>
                </div>

               
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1"><?= lang('Auth.password') ?></label>
                        <input type="password" name="password" required class="form-input <?= session('errors.password') ? 'border-red-500' : '' ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="new-password">
                    </div>
                    <div>
                        <label for="pass_confirm" class="block text-sm font-medium text-gray-700 mb-1"><?= lang('Auth.repeatPassword') ?></label>
                        <input type="password" name="password_confirm" required class="form-input <?= session('errors.password_confirm') ? 'border-red-500' : '' ?>" placeholder="<?= lang('Auth.passwordConfirm') ?>" autocomplete="new-password">
                    </div>

                <button type="submit" class="w-full bg-blue-400 text-white py-3 px-4 rounded-md hover:bg-blue-500 transition focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 font-semibold text-lg mt-6">
                    <?= lang('Auth.register') ?>
                </button>
            </form>

            <p class="text-center text-sm text-gray-600 mt-6">
                Sudah punya akun? <a href="<?= base_url('login') ?>" class="text-blue-400 hover:underline"><?= lang('Auth.login') ?></a>
            </p>
        </div>
    </main>

    <?= $this->include('layout/footer') ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true });

        const provinsiSelect = document.getElementById('provinsi');
        const kabupatenSelect = document.getElementById('kabupaten');
        const kecamatanSelect = document.getElementById('kecamatan');
        const kelurahanSelect = document.getElementById('kelurahan');

        const provinsiNameInput = document.getElementById('provinsi_name');
        const kabupatenNameInput = document.getElementById('kabupaten_name');
        const kecamatanNameInput = document.getElementById('kecamatan_name');
        const kelurahanNameInput = document.getElementById('kelurahan_name');

        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')
            .then(response => response.json())
            .then(provinces => {
                provinces.forEach(provinsi => {
                    const option = document.createElement('option');
                    option.value = provinsi.id;
                    option.textContent = provinsi.name;
                    provinsiSelect.appendChild(option);
                });
            });

        provinsiSelect.addEventListener('change', function () {
            const selectedId = this.value;
            provinsiNameInput.value = this.options[this.selectedIndex].textContent;
            
            kabupatenSelect.innerHTML = '<option value="">-- Pilih Kabupaten/Kota --</option>';
            kecamatanSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
            kelurahanSelect.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';
            kabupatenNameInput.value = '';
            kecamatanNameInput.value = '';
            kelurahanNameInput.value = '';

            if (selectedId) {
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${selectedId}.json`)
                    .then(response => response.json())
                    .then(regencies => {
                        regencies.forEach(kabupaten => {
                            const option = document.createElement('option');
                            option.value = kabupaten.id;
                            option.textContent = kabupaten.name;
                            kabupatenSelect.appendChild(option);
                        });
                    });
            }
        });

        kabupatenSelect.addEventListener('change', function () {
            const selectedId = this.value;
            kabupatenNameInput.value = this.options[this.selectedIndex].textContent;

            kecamatanSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
            kelurahanSelect.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';
            kecamatanNameInput.value = '';
            kelurahanNameInput.value = '';

            if (selectedId) {
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${selectedId}.json`)
                    .then(response => response.json())
                    .then(districts => {
                        districts.forEach(kecamatan => {
                            const option = document.createElement('option');
                            option.value = kecamatan.id;
                            option.textContent = kecamatan.name;
                            kecamatanSelect.appendChild(option);
                        });
                    });
            }
        });

        kecamatanSelect.addEventListener('change', function () {
            const selectedId = this.value;
            kecamatanNameInput.value = this.options[this.selectedIndex].textContent;

            kelurahanSelect.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';
            kelurahanNameInput.value = '';
            
            if (selectedId) {
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${selectedId}.json`)
                    .then(response => response.json())
                    .then(villages => {
                        villages.forEach(kelurahan => {
                            const option = document.createElement('option');
                            option.value = kelurahan.id;
                            option.textContent = kelurahan.name;
                            kelurahanSelect.appendChild(option);
                        });
                    });
            }
        });
        
        kelurahanSelect.addEventListener('change', function () {
            kelurahanNameInput.value = this.options[this.selectedIndex].textContent;
        });

    </script>
</body>
</html>
</html>
