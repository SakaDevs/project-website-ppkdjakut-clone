<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan Pekerjaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .job-card {
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%; /* Ensures cards in a row have the same height */
        }
        
        .job-card:hover {
            border-color: #06b6d4; /* Tailwind's cyan-500 */
            box-shadow: 0 7px 20px -4px rgba(0, 0, 0, 0.1);
        }
        
        .card-shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    <?= view('layout/navbar.php'); ?>

    <div class="container mx-auto px-4 py-8 mt-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-down">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Lowongan Pekerjaan</h1>
                
                <form class="max-w-lg mx-auto" method="get" action="<?= base_url('lowongan/search') ?>">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-cyan-500 focus:border-cyan-500" placeholder="Cari posisi atau perusahaan..." required name="keyword"/>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-full text-sm px-4 py-2">Search</button>
                    </div>
                    <?php if (auth()->loggedIn() && auth()->user()->inGroup('admin')): ?>
                        <div class="text-center mt-6">
                            <a href="<?= base_url('lowongan/tambah') ?>" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-lg font-semibold shadow-sm transition-transform hover:scale-105 inline-block">
                                + Tambah Lowongan
                            </a>
                        </div>
                    <?php endif; ?>
                </form>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-duration="800">
                <?php if(!empty($lowongan)): ?>
                    <?php foreach ($lowongan as $row): ?>
                        <div class="job-card bg-white rounded-xl border border-gray-200 overflow-hidden p-6">
                            <!-- Poster Image -->
                            <img class="w-full rounded-lg object-contain mb-5 shadow-sm" 
                                 src="<?= base_url('uploads/foto_lowongan/' . $row['gambar_poster']) ?>" 
                                 alt="<?= esc($row['judul_lowongan']) ?>" 
                                 onerror="this.onerror=null;this.src='https://placehold.co/600x400/e2e8f0/64748b?text=Image+Not+Found';" />

                            <!-- Job Title -->
                            <h3 class="text-xl font-bold text-gray-900 mb-1">
                                <?= esc($row['judul_lowongan']) ?>
                            </h3>

                            <!-- Company Name -->
                            <p class="text-gray-600 mb-4 text-sm font-medium">
                                <?= esc($row['nama_perusahaan']) ?>
                            </p>

                            <!-- Requirements (Details) -->
                            <div class="text-gray-700 text-sm mb-4 flex-grow">
                                <p class="font-semibold mb-2 text-gray-800">Requirements:</p>
                                <!-- Using line-clamp to keep card sizes consistent -->
                                <div class="prose prose-sm text-gray-600 line-clamp-4">
                                    <?= nl2br(esc($row['detail_lengkap'])) ?>
                                </div>
                            </div>

                            <!-- Card Footer -->    
                            <div class="mt-auto pt-5 border-t border-gray-100">
                                <div class="flex justify-between items-center">
                                    <!-- Posting Date -->
                                    <span class="text-xs text-gray-500">
                                        Diposting: <?= isset($row['created_at']) ? date('d M Y', strtotime($row['created_at'])) : 'N/A' ?>
                                    </span>
                                    
                                    <!-- Detail Button -->
                                    <a href="/lowongan/detail/<?= $row['id'] ?>" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-5 rounded-lg text-sm transition duration-300 shadow-sm hover:shadow-md">
                                        Detail
                                    </a>
                                </div>
                                
                                <!-- Admin Buttons -->
                                <?php if (auth()->loggedIn() && auth()->user()->inGroup('admin')): ?>
                                    <div class="flex items-center justify-end gap-4 mt-4 pt-4 border-t border-gray-100">
                                        <a href="/lowongan/edit/<?= $row['id']?>" class="text-sm font-medium text-green-600 hover:underline">
                                            Edit
                                        </a>
                                        <form action="/lowongan/delete/<?= $row['id'] ?>" method="post" class="m-0" onsubmit="return confirm('Apakah kamu yakin ingin menghapus lowongan ini?');">
                                            <?= csrf_field() ?>
                                            <!-- This button is now aligned because the mt-1 class was removed -->
                                            <button type="submit" class="text-sm font-medium text-red-600 hover:underline">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                <?php else: ?>
                    <div class="col-span-full text-center py-20 bg-white rounded-lg border border-dashed">
                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak ada lowongan yang ditemukan</h3>
                        <p class="text-gray-600">Silakan coba lagi nanti atau ubah kata kunci pencarian Anda.</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <?= $pager->links('group1', 'tailwind_layout'); ?>
            </div>
        </div>
    </div>
        
    <!-- Assuming footer.php is in the same directory or configured path -->
    <?= view('layout/footer.php'); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS (Animate on Scroll) library
        AOS.init({
            offset: 100,
            duration: 600,
            easing: 'ease-in-out',
            once: true, // Animation happens only once
        });
    </script>
</body>
</html>
