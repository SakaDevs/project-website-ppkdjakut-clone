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
    <!-- Navbar include would go here -->
    <?= view('layout/navbar.php'); ?>   
    <!-- Jobs Container -->
    <div class="container mx-auto px-4 py-8" data-aos="fade-up" duration="1000">
        <div class="max-w-9xl mx-auto">

            <!-- Search Bar -->
            <form class="max-w-md mx-auto mb-10 mt-20" method="get" action="<?= base_url('lowongan/search') ?>">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="keyword"
                        class="block w-full p-4 ps-10 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search..." required/>
                    <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                        Search
                    </button>
                </div>
            </form>

            <!-- Jobs Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php foreach ($lowongan as $data): ?>
                    <div class="job-card bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100 hover:border-indigo-200">
                        <!-- Card Image -->
                        <div class="relative">
                            <img class="w-full h-48 object-cover"
                                src="<?= base_url('uploads/foto_lowongan/' . $data['gambar_poster'])?>"
                                alt="<?= htmlspecialchars($data['judul_lowongan']) ?>"/>
                        </div>

                        <!-- Card Content -->
                        <div class="card-content p-6">
                            <div class="card-body">
                                <!-- Job Status -->
                                <div class="flex items-center mb-3">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-green-600 font-medium">Available</span>
                                </div>

                                <!-- Job Title -->
                                <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2 min-h-[3.5rem]">
                                    <?= htmlspecialchars($data['judul_lowongan']) ?>
                                </h3>

                                <!-- Job Description -->
                                <p class="text-gray-600 mb-4 line-clamp-3 text-sm leading-relaxed min-h-[4.5rem]">
                                    <?= htmlspecialchars($data['detail_lengkap']) ?>
                                </p>

                                <!-- Company Info -->
                                <div class="flex items-center mb-6">
                                    <div class="flex items-center text-gray-500">
                                        <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                        <span class="text-sm truncate"><?= htmlspecialchars($data['nama_perusahaan']) ?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail Button -->
                            <div class="mt-auto">
                                <a href="/lowongan/detail/<?= $data['id'] ?>"
                                class="btn-primary w-full text-white font-medium py-3 rounded-2xl text-center">
                                    <span class="flex items-center justify-center">
                                        View Details
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Empty State -->
            <?php if (empty($lowongan)): ?>
                <div class="text-center py-16">
                    <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2"/>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No jobs available</h3>
                    <p class="text-gray-600">Check back later for new opportunities</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?= view('layout/footer.php'); ?>
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