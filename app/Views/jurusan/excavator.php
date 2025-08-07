<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Operator Excavator - PPKD Jakarta Utara</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc; /* gray-50 */
        }
        .navbar-shadow {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .prose-custom ul {
            list-style-position: inside;
            padding-left: 0;
        }
        .prose-custom li {
            margin-bottom: 0.75rem;
            padding-left: 1.5rem;
            position: relative;
        }
        .prose-custom li::before {
            content: '✓';
            color: #0891b2; /* cyan-600 */
            font-weight: bold;
            display: inline-block; 
            width: 1em;
            margin-left: -1.5em;
            position: absolute;
            left: 0.5em;
        }
        .footer-bg {
            background-color: #0f172a; /* slate-900 */
        }
    </style>
</head>
<body class="text-gray-700">
<?= view('layout/navbar') ?>
<section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
    <!-- Sidebar Kurikulum dan SKKNI -->
    <aside class="md:col-span-1 space-y-6">
        <div class="border rounded-lg p-4 bg-white shadow-sm">
        <h2 class="text-lg font-semibold mb-4 text-gray-800">Kurikulum</h2>
        <ul class="space-y-2 text-sm text-gray-700 list-none">
            <li>• Menerapkan Keselamatan & Kesehatan Kerja (K3) dan Lingkungan Hidup</li>
            <li>• Komunikasi dan Kerja Sama di Tempat Kerja</li>
            <li>• Pemeliharaan Harian Excavator</li>
            <li>• Pengoperasian Excavator untuk Pembuatan Saluran (Trenching)</li>
            <li>• Pengoperasian Excavator untuk Penggalian & Pemindahan Material</li>
            <li>• Pengoperasian Excavator untuk Pembuatan Tanggul</li>
        </ul>
        </div>
        <div class="border p-4 rounded-lg bg-gray-50 shadow-sm">
        <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
        <p class="text-sm text-gray-600 mb-3">
        Nomor KEP.91/MEN/V/2010 Tahun 2010
        </p>
        <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
            Daftar
        </a>
        </div>
    </aside>

    <!-- Konten Utama -->
    <div class="md:col-span-2 space-y-6">
        <img src="https://ppkdju.com/static/img/regular/1024x648/excavator.jpg" alt="Pelatihan Operator Excavator" class="rounded-md shadow-md w-full max-h-[500px] object-cover">

        <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-3">Operator Excavator</h1>
        <p class="text-gray-700 leading-relaxed">
            Pelatihan Operator Excavator dirancang untuk membekali peserta dengan keterampilan teknis dan pengetahuan praktis dalam mengoperasikan excavator secara aman dan efisien di berbagai proyek—mulai dari penggalian, saluran, hingga pembangunan tanggul—dengan pendekatan teori dan praktik lapangan.
        </p>
        </div>

        <div class="space-y-4 prose-custom">
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Menerapkan Keselamatan & Kesehatan Kerja (K3) dan Lingkungan Hidup</h2>
            <p class="text-gray-700 text-sm">
            Peserta akan diajarkan identifikasi bahaya, penggunaan APD, dan simulasi prosedur kerja aman serta kepedulian terhadap lingkungan kerja. 
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Komunikasi dan Kerja Sama di Tempat Kerja</h2>
            <p class="text-gray-700 text-sm">
            Melatih keterampilan komunikasi verbal/non-verbal, koordinasi tim, dan pemecahan konflik di lingkungan operasional excavator.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Pemeliharaan Harian Excavator</h2>
            <p class="text-gray-700 text-sm">
            Teknik pemeriksaan komponen utama, sistem hidrolik, kelistrikan, pelumasan, kebersihan unit, serta pembuatan laporan harian.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Pengoperasian Excavator – Pembuatan Saluran (Trenching)</h2>
            <p class="text-gray-700 text-sm">
            Teknik penggalian dan perataan tanah untuk membuat saluran sesuai spesifikasi teknis, dengan simulasi praktek.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Pengoperasian Excavator – Penggalian & Pemindahan Material</h2>
            <p class="text-gray-700 text-sm">
            Fokus pada teknik efisien penggalian dan pemindahan material dalam berbagai kondisi medan.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Pengoperasian Excavator – Pembuatan Tanggul</h2>
            <p class="text-gray-700 text-sm">
            Latih pengoperasian excavator untuk formasi tanggul dengan teknik penggalian dan penataan material yang sesuai dengan standar konstruksi.
            </p>
        </div>
        </div>
    </div>
    </section>

<?= view('layout/footer') ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
        });

        // Logika untuk Mobile Menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelectorAll('#mobile-menu a, #navbar a');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Sembunyikan menu saat link di-klik (untuk navigasi di halaman yang sama)
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Tambah shadow pada navbar saat scroll
        const navbar = document.getElementById('navbar');
        window.onscroll = function() {
            if (window.scrollY > 10) {
                navbar.classList.add('navbar-shadow');
            } else {
                navbar.classList.remove('navbar-shadow');
            }
        };

    </script>
</body>
</html>