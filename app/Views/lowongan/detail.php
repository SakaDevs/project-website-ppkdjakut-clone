<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($detail['judul_lowongan'] ?? 'Detail Lowongan') ?> - PPKD Jakut</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .prose-custom {
            color: #374151; /* gray-700 */
        }
        .prose-custom h2 {
            font-size: 1.25rem; /* text-xl */
            font-weight: 600; /* font-semibold */
            margin-bottom: 1rem;
            color: #1f2937; /* gray-800 */
        }
        .prose-custom ul {
            list-style-position: inside;
            padding-left: 0;
        }
        .prose-custom li {
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }
        .prose-custom li::before {
            content: '•';
            color: #06b6d4; /* cyan-500 */
            font-weight: bold;
            display: inline-block; 
            width: 1em;
            margin-left: -1.5em;
            position: absolute;
            left: 0.5em;
        }
    </style>
</head>
<body class="min-h-screen">

    <?= view('layout/navbar.php'); ?>

    <main class="container mx-auto px-4 py-12 lg:py-16 mt-20">
        <?php if (!empty($detail) && is_array($detail)) : ?>
            <div class="max-w-7xl mx-auto">
                <!-- Page Header -->
                <div class="mb-8" data-aos="fade-up">
                    <a href="/lowongan" class="inline-flex items-center text-cyan-600 hover:text-cyan-800 transition-colors mb-4">
                        <i class="bi bi-arrow-left mr-2"></i>
                        Kembali ke semua lowongan
                    </a>
                    <h1 class="text-4xl font-bold text-gray-800 mb-2" data-aos="fade-up" data-aos-delay="100">
                        <?= htmlspecialchars($detail['judul_lowongan']) ?>
                    </h1>
                    <p class="text-lg text-gray-500" data-aos="fade-up" data-aos-delay="200">
                        di <span class="font-semibold text-gray-600"><?= htmlspecialchars($detail['nama_perusahaan'] ?? 'N/A') ?></span>
                    </p>
                </div>

                <!-- Main Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                    
                    <!-- Left Column: Job Description -->
                    <div class="lg:col-span-2" data-aos="fade-right" data-aos-delay="300">
                        <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-200">
                            <img class="w-full h-auto object-cover rounded-xl mb-8"
                                 src="<?= base_url('uploads/foto_lowongan/' . $detail['gambar_poster'] )?>"
                                 alt="<?= htmlspecialchars($detail['judul_lowongan']) ?>" 
                                 onerror="this.onerror=null;this.style.display='none';"/>
                            
                            <div class="prose-custom max-w-none">
                                <?= nl2br(htmlspecialchars($detail['detail_lengkap'] ?? 'No detailed description provided.')) ?>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Summary Box -->
                    <div class="lg:col-span-1" data-aos="fade-left" data-aos-delay="400">
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-200 sticky top-28">
                            <h2 class="text-xl font-bold text-gray-800 mb-4">Ringkasan Pekerjaan</h2>
                            
                            <div class="space-y-4 text-gray-600">
                                <div class="flex items-start">
                                    <i class="bi bi-building text-cyan-500 text-xl mr-3 mt-1"></i>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Perusahaan</h3>
                                        <p><?= htmlspecialchars($detail['nama_perusahaan'] ?? 'N/A') ?></p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Diposting</h3>
                                        <p><?= htmlspecialchars(date('d F Y', strtotime($detail['created_at'] ?? date('Y-m-d')))) ?></p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Diperbarui</h3>
                                        <p><?= htmlspecialchars(date('d F Y', strtotime($detail['updated_at'] ?? date('Y-m-d')))) ?></p>
                                    </div>
                                </div>
                            </div>

                            <a href="<?= base_url(slugify($detail['judul_lowongan']) . '/daftar') ?>"
                               class="w-full mt-8 inline-block text-center bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300 shadow-sm hover:shadow-md">
                                Lamar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="text-center py-20 px-4">
                <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                </svg>
                <h3 class="text-2xl font-medium text-gray-900 mb-2">Lowongan tidak ditemukan</h3>
                <p class="text-gray-600 mb-6">Maaf, detail lowongan yang Anda cari tidak tersedia saat ini.</p>
                <a href="/lowongan" class="inline-flex items-center px-6 py-3 text-lg font-medium text-white bg-cyan-600 hover:bg-cyan-700 rounded-xl shadow-md">
                    Kembali ke Daftar Lowongan
                </a>
            </div>
        <?php endif; ?>
    </main>

    <!-- Include Footer -->
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
