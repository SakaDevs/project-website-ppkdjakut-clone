<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Regular - PPKD Jakut</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .pelatihan-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .pelatihan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="min-h-screen">

    <?= view('layout/navbar.php'); ?>

    <div class="container mx-auto px-4 py-12 lg:py-16 mt-12">
        <div class="max-w-7xl mx-auto" data-aos="fade-up" data-aos-duration="1000">
            
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">List Pelatihan Regular</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan program pelatihan regular yang sesuai dengan minat dan keahlian Anda.</p>
            </div>

            <!-- Search Form -->
            <form class="max-w-lg mx-auto mb-10" method="get" action="<?= base_url('pelatihan/regular/search') ?>">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-12 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-cyan-500 focus:border-cyan-500" placeholder="Cari pelatihan regular..." required name="keyword"/>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-full text-sm px-5 py-2">Search</button>
                </div>
            </form>

            <!-- Admin: Add Training Button -->
            <?php if(auth()->loggedIn() && auth()->user()->inGroup('admin')):?>
                <div class="text-center my-8">
                    <a href="<?= base_url('pelatihan/regular/tambah') ?>" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-lg font-semibold shadow-sm transition-transform hover:scale-105 inline-block">
                        + Tambah Pelatihan Regular
                    </a>
                </div>
            <?php endif; ?> 

            <!-- Grid for Training Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                <?php if(!empty($pelatihan)): ?>
                    <?php foreach ($pelatihan as $row): ?>
                        <div class="pelatihan-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                            <img class="w-full h-48 object-cover" 
                                 src="<?= base_url('uploads/foto_pelatihan_reguler/' . $row['gambar']) ?>" 
                                 alt="<?= esc($row['nama_pelatihan']) ?>"
                                 onerror="this.onerror=null;this.src='https://placehold.co/600x400/e2e8f0/64748b?text=Image+Not+Found';">
                            
                            <div class="p-5 flex flex-col flex-grow">
                                <span class="text-sm font-semibold text-cyan-600 mb-2"><?= esc($row['jenis_pelatihan']) ?></span>
                                <h3 class="text-lg font-bold text-gray-900 mb-3 flex-grow">
                                    <?= esc($row['nama_pelatihan']) ?>
                                </h3>
                                
                                <div class="text-sm text-gray-600 space-y-2 mb-5">
                                    <p><strong>Durasi:</strong> <?= esc($row['total_hari']) ?> Hari Pelatihan</p>
                                    <p><strong>Peserta:</strong> <?= esc($row['total_peserta']) ?> Orang / Angkatan</p>
                                    <p><strong>Pendaftaran:</strong> <?= esc($row['pembukaan']) ?></p>
                                </div>

                                <div class="mt-auto">
                                    <a href="/pelatihan/regular/daftar" class="block w-full text-center bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                                        Daftar Sekarang
                                    </a>
                                    
                                    <?php if(auth()->loggedIn() && auth()->user()->inGroup('admin')):?>
                                        <div class="flex items-center justify-center gap-x-6 mt-4">
                                            <a href="/pelatihan/regular/edit/<?= $row['id']?>" class="font-medium text-green-600 hover:underline text-sm">
                                                Edit
                                            </a>
                                            <form action="/pelatihan/regular/delete/<?= $row['id'] ?>" method="post" class="m-0" onsubmit="return confirm('Apakah kamu yakin ingin menghapus pelatihan ini?');">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="font-medium text-red-600 hover:underline text-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-span-full text-center py-20 bg-white rounded-lg border border-dashed">
                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak Ada Pelatihan Tersedia</h3>
                        <p class="text-gray-600">Silakan coba cek kembali nanti.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?= view('layout/footer.php'); ?>
>
    
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
