<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($detail['judul_lowongan'] ?? 'Detail Lowongan') ?> - PPKD Jakut</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
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

        .pt-fixed-navbar {
            padding-top: 90px; 
        }
    </style>
</head>
<body>
    <!-- Navbar include -->
    <?= $this->include('layout/navbar') ?>

    <main class="pt-fixed-navbar py-12 px-4 md:px-8 lg:px-16 flex items-center justify-center mt-15" data-aos="fade-up" data-aos-duration="1000">
        <?php if (!empty($detail) && is_array($detail)) : ?>
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden max-w-4xl w-full border border-gray-200">
                <!-- Header Image -->
                <div class="relative h-64 md:h-80 bg-gray-200 flex items-center justify-center overflow-hidden">
                    <?php if (!empty($detail['gambar_poster'])) : ?>
                        <img class="w-full h-full object-cover"
                             src="<?= base_url('uploads/foto_lowongan/' . $detail['gambar_poster'] )?>"
                             alt="<?= htmlspecialchars($detail['judul_lowongan']) ?>" />
                    <?php else : ?>
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-100 to-purple-100 text-gray-500 text-xl font-medium">
                            No Image Available
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Job Details Content -->
                <div class="p-6 md:p-8">
                    <!-- Job Title -->
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                        <?= htmlspecialchars($detail['judul_lowongan']) ?>
                    </h1>

                    <!-- Company & Location -->
                    <div class="flex flex-wrap items-center gap-4 mb-6 text-gray-600 text-lg">
                        <span class="flex items-center">
                            <i class="bi bi-building text-xl mr-2 text-blue-500"></i>
                            <?= htmlspecialchars($detail['nama_perusahaan'] ?? 'N/A') ?>
                        </span>
                        <span class="flex items-center text-sm text-gray-500">
                            <i class="bi bi-calendar-event text-base mr-2"></i>
                            Diposting: <?= htmlspecialchars(date('d M Y', strtotime($detail['tanggal_posting'] ?? date('Y-m-d')))) ?>
                        </span>
                    </div>

                    <!-- Job Description -->
                    <div class="text-gray-700 leading-relaxed text-base mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-3">Job Description:</h2>
                        <p class="whitespace-pre-wrap"><?= htmlspecialchars($detail['detail_lengkap'] ?? 'No detailed description provided.') ?></p>
                        <?php if (!empty($detail['deskripsi_singkat'])) : ?>
                            <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-2">Singkatan:</h3>
                            <p><?= htmlspecialchars($detail['deskripsi_singkat']) ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <!-- Apply Button -->
                        <a href="mailto:hr@example.com?subject=Application for <?= urlencode($detail['judul_lowongan'] ?? 'Job') ?>"
                           class="btn-primary flex-1 text-white font-semibold py-3 px-6 rounded-xl text-lg shadow-md hover:shadow-lg">
                            Apply
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>

                        <!-- Back Button -->
                        <a href="/lowongan"
                           class="flex-1 bg-gray-200 text-gray-800 font-semibold py-3 px-6 rounded-xl text-lg shadow-md hover:bg-gray-300 hover:shadow-lg transition-all duration-300 ease-in-out flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Kembali ke Lowongan
                        </a>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="text-center py-16 px-4">
                <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="text-2xl font-medium text-gray-900 mb-2">Lowongan tidak ditemukan</h3>
                <p class="text-gray-600 mb-6">Maaf, detail lowongan yang Anda cari tidak tersedia.</p>
                <a href="/lowongan" class="inline-flex items-center px-6 py-3 text-lg font-medium text-white btn-primary rounded-xl shadow-md hover:shadow-lg">
                    Kembali ke Daftar Lowongan
                </a>
            </div>
        <?php endif; ?>
    </main>
    <?php include('layout/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
