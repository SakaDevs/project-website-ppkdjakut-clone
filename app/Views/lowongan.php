<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .job-card {
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .job-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
        
        .btn-primary {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #4338ca 0%, #6d28d9 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        
        .company-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }
        
        .salary-badge {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }
        
        .card-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-body {
            flex-grow: 1;
        }
        
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <?= include('layout/navbar.php') ?>
    <div class="container mx-auto px-4 py-8 mt-20" data-aos="fade-up" data-aos-duration="1000">
            <div class="max-w-9xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-3xl text-gray-800 font-light mb-4">Lowongan Pekerjaan</h1>
                    
                    <form class="max-w-md mx-auto mb-10" method="get" action="<?= base_url('lowongan/search') ?>">   
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
                        <?php if (auth()->loggedIn()): ?>
                            <?php if (auth()->user()->inGroup('admin')): ?>
                            <div class="text-center mt-6">
                                <a href="<?= base_url('lowongan/tambah') ?>" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                                    + Tambah Lowongan
                                </a>
                            </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </form>
                </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <?php if(!empty($lowongan)): ?>
            <?php foreach ($lowongan as $row): ?>
                    <div class="job-card bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100 hover:border-indigo-200 flex flex-col">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" 
                                src="<?= base_url('uploads/foto_lowongan/' . $row['gambar_poster']) ?>" 
                                alt="<?= esc($row['gambar_poster']) ?>" />
                        </div>

                        <div class="card-content p-6 flex flex-col flex-grow">
                            <div class="card-body flex-grow">
                                <div class="flex items-center mb-3">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-green-600 font-medium">Available</span>
                                </div>

                                <h3 class="text-lg font-bold text-gray-900 line-clamp-2 min-h-[3.5rem]">
                                    <?= esc($row['judul_lowongan']) ?>
                                </h3>

                                <p class="text-gray-600 mb-2 text-sm leading-relaxed min-h-[4.5rem]"> 
                                    <?= esc($row['detail_lengkap']) ?>
                                </p>

                                <div class="flex items-center mb-6">
                                    <div class="flex items-center text-gray-500">
                                        <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                        <span class="text-sm truncate"><?= esc($row['nama_perusahaan']) ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-auto">
                                <a href="/lowongan/detail/<?= $row['id'] ?>" 
                                class="btn-primary w-full text-white font-medium py-3 rounded-2xl text-center">
                                    <span class="flex items-center justify-center">
                                        View Details
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </span>
                                </a>
                                <?php if (auth()->loggedIn() && auth()->user()->inGroup('admin')): ?>
                                    <div class="flex items-center gap-5 justify-center mt-4">
                                        <a href="/lowongan/edit/<?= $row['id']?>" class="bg-green-600 hover:bg-green-700 text-white text-center rounded px-4 py-2 text-sm">
                                            Edit
                                        </a>
                                        <form action="/lowongan/delete/<?= $row['id'] ?>" method="post" onsubmit="return confirm('Apakah kamu yakin ingin menghapus lowongan ini?');">
                                            <?= csrf_field() ?>
                                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-center rounded px-4 py-2 text-sm">
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
             <div class="col-span-full text-center py-16">
                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak ada lowongan</h3>
                <p class="text-gray-600">Cek kembali nanti.</p>
            </div>
        <?php endif; ?>
    </div>
    <div class="mt-10 flex justify-center">
        <?= $pager->links('group1', 'tailwind_layout') ?>
    </div>
            </div>
    </div>
        

    <?php include('layout/footer.php') ?>
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