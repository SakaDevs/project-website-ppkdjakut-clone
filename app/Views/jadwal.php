<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelatihan - PPKD Jakut</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?= $this->include('layout/navbar') ?>

    <section id="jadwal-pelatihan-section" class="py-12 bg-white mt-15" >
        <div class="w-3/4 px-4 mx-auto" data-aos="fade-up" data-aos-duration="1000"> 
            <h2 class="text-3xl font-light text-center text-gray-800 mb-4">Daftar Jadwal Pelatihan PPKD Jakut</h2>
               <form class="max-w-md mx-auto mb-10" method="get" action="<?= base_url('jadwal/search') ?>">   
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search... " required name="keyword"/>
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
            <?php if(auth()->loggedIn()):?>
                <?php if(auth()->user()->inGroup('admin')): ?>
                <div class="text-center my-6">
                    <a href="<?= base_url('jadwal/tambah') ?>" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                        + Tambah Jadwal
                    </a>
                </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (!empty($jadwal)): ?>
            <div class="shadow-lg rounded-lg overflow-hidden w-full">
                <table class="w-full divide-y divide-gray-200 text-sm" id="jadwal-table">
                    <thead class="bg-gray-100 text-gray-900">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Program Pelatihan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Angkatan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Tutup Pendaftaran</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Mulai Seleksi</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Akhir Seleksi</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Mulai Pelatihan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Akhir Pelatihan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Awal Uji Kompetensi</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Akhir Uji Kompetensi</th>
                            <?php if(auth()->loggedIn()): ?>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Aksi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                            <?php foreach($jadwal as $index => $raimu): ?>
                            <tr class="<?= $index % 2 === 0 ? 'bg-white' : 'bg-gray-100' ?>">
                                <td class="px-6 py-4"><?= strtoupper($raimu['nama_program']) ?></td>
                                <td class="px-6 py-4"><?= $raimu['angkatan'] ?></td>
                                <td class="px-6 py-4"><?= date('d M Y', strtotime($raimu['tutup_pendaftaran'])) ?></td>
                                <td class="px-6 py-4"><?= date('d M Y', strtotime($raimu['mulai_seleksi'])) ?></td>
                                <td class="px-6 py-4"><?= date('d M Y', strtotime($raimu['akhir_seleksi'])) ?></td>
                                <td class="px-6 py-4"><?= date('d M Y', strtotime($raimu['mulai_pelatihan'])) ?></td>
                                <td class="px-6 py-4"><?= date('d M Y', strtotime($raimu['akhir_pelatihan'])) ?></td>
                                <td class="px-6 py-4"><?= date('d M Y', strtotime($raimu['awal_kompetensi'])) ?></td>
                                <td class="px-6 py-4"><?= date('d M Y', strtotime($raimu['akhir_kompetensi'])) ?></td>
                                <?php if(auth()->loggedIn() && auth()->user()->inGroup('admin')):?>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <form action="/jadwal/delete/<?=$raimu['id']?>" method="post" onsubmit="return confirm('Apakah kamu yakin ingin menghapus jadwal ini?');">
                                            <?= csrf_field() ?>
                                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded text-sm">
                                                Delete
                                            </button>
                                        </form>
                                        <a href="/jadwal/edit/<?=$raimu['id']?>" class="bg-green-600 hover:bg-green-700 text-white px-2 py-1 rounded text-sm">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <div class="col-span-full text-center py-16">
                                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak ada jadwal tersedia</h3>
                                <p class="text-gray-600">Coba cek kembali lagi nanti.</p>
                            </div>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
                                
    <?php include('layout/footer.php') ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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