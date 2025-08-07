<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelatihan - PPKD Jakut</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc; /* Tailwind gray-50 */
        }
    </style>
</head>
<body class="min-h-screen">
<?= view('layout/navbar.php'); ?>

    <section id="jadwal-pelatihan-section" class="py-12 lg:py-16 mt-15">
        <div class="max-w-9l mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Daftar Jadwal Pelatihan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Berikut adalah jadwal lengkap untuk semua program pelatihan yang diselenggarakan oleh PPKD Jakarta Utara.</p>
            </div>

            <!-- Search Form -->
            <form class="max-w-lg mx-auto mb-10" method="get" action="<?= base_url('jadwal/search') ?>">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-12 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-cyan-500 focus:border-cyan-500" placeholder="Cari program atau angkatan..." required name="keyword"/>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-full text-sm px-5 py-2">Search</button>
                </div>
            </form>

            <!-- Admin: Add Schedule Button -->
            <?php if(auth()->loggedIn() && auth()->user()->inGroup('admin')): ?>
                <div class="text-center my-8">
                    <a href="<?= base_url('jadwal/tambah') ?>" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-lg font-semibold shadow-sm transition-transform hover:scale-105 inline-block">
                        + Tambah Jadwal
                    </a>
                </div>
            <?php endif; ?>

            <!-- Schedule Table -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-600" id="jadwal-table">
                        <thead class="bg-gray-50 text-gray-700 uppercase text-xs tracking-wider">
                            <tr>
                                <th scope="col" class="px-6 py-3">Program Pelatihan</th>
                                <th scope="col" class="px-6 py-3">Angkatan</th>
                                <th scope="col" class="px-6 py-3">Tutup Pendaftaran</th>
                                <th scope="col" class="px-6 py-3">Mulai Seleksi</th>
                                <th scope="col" class="px-6 py-3">Akhir Seleksi</th>
                                <th scope="col" class="px-6 py-3">Mulai Pelatihan</th>
                                <th scope="col" class="px-6 py-3">Akhir Pelatihan</th>
                                <th scope="col" class="px-6 py-3">Awal Uji Kompetensi</th>
                                <th scope="col" class="px-6 py-3">Akhir Uji Kompetensi</th>
                                <?php if(auth()->loggedIn() && auth()->user()->inGroup('admin')): ?>
                                    <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($jadwal)): ?>
                                <?php foreach($jadwal as $index => $raimu): ?>
                                    <tr class="border-b hover:bg-gray-50/50">
                                        <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap lg:whitespace-normal"><?= esc(strtoupper($raimu['nama_program'])) ?></td>
                                        
                                        <td class="px-6 py-4 whitespace-nowrap lg:whitespace-normal"><?= esc($raimu['angkatan']) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap lg:whitespace-normal"><?= date('d M Y', strtotime($raimu['tutup_pendaftaran'])) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap lg:whitespace-normal"><?= date('d M Y', strtotime($raimu['mulai_seleksi'])) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap lg:whitespace-normal"><?= date('d M Y', strtotime($raimu['akhir_seleksi'])) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap lg:whitespace-normal"><?= date('d M Y', strtotime($raimu['mulai_pelatihan'])) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap lg:whitespace-normal"><?= date('d M Y', strtotime($raimu['akhir_pelatihan'])) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap lg:whitespace-normal"><?= date('d M Y', strtotime($raimu['awal_kompetensi'])) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap lg:whitespace-normal"><?= date('d M Y', strtotime($raimu['akhir_kompetensi'])) ?></td>
                                        
                                        <?php if(auth()->loggedIn() && auth()->user()->inGroup('admin')):?>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center justify-center gap-x-6">
                                                    <a href="/jadwal/edit/<?=$raimu['id']?>" class="font-medium text-green-600 hover:underline">
                                                        Edit
                                                    </a>
                                                    <form action="/jadwal/delete/<?=$raimu['id']?>" method="post" class="m-0" onsubmit="return confirm('Apakah kamu yakin ingin menghapus jadwal ini?');">
                                                        <?= csrf_field() ?>
                                                        <button type="submit" class="font-medium text-red-600 hover:underline">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="<?= (auth()->loggedIn() && auth()->user()->inGroup('admin')) ? '10' : '9' ?>" class="text-center py-20">
                                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                                        </svg>
                                        <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak Ada Jadwal Tersedia</h3>
                                        <p class="text-gray-600">Silakan coba cek kembali nanti.</p>
                                    </td>
                                </tr>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
        
    <?= view('layout/footer.php'); ?>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                offset: 100,
                duration: 600,
                easing: 'ease-in-out',
                once: true,
            });
        });
    </script>
</body>
</html>
        