<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Bahasa Inggris - PPKD Jakarta Utara</title>
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
    <!-- Sidebar Kurikulum -->
    <aside class="md:col-span-1" data-aos="fade-right">
        <div class="rounded-lg p-4 bg-white shadow-sm" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-lg font-semibold mb-4 text-gray-800">Kurikulum</h2>
        <ul class="space-y-2 text-sm text-gray-700 list-none">
                <li>• Memberi salam / Greetings</li>
                <li>• Melakukan perkenalan / Introductions</li>
                <li>• Ungkapan umum dalam bertelepon</li>
                <li>• Melakukan Panggilan Telepon</li>
                <li>• Menerima & menyampaikan pesan telepon</li>
                <li>• Meninggalkan Pesan via Telepon</li>
                <li>• Membuat Janji Temu</li>
                <li>• Menyambut tamu</li>
                <li>• Menerima tamu</li>
                <li>• Korespondensi Niaga Dasar</li>
                <li>• Membuat Lamaran Kerja</li>
                <li>• Menyiapkan Presentasi</li>
                <li>• Melakukan Presentasi</li>
                <li>• Mengatur Perjalanan Dinas</li>
                <li>• Menangani Keluhan</li>
            </ul>
        </div>

        <!-- SKKNI Box -->
        <div class="mt-6 p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
            <p class="text-sm text-gray-600 mb-3">No. KEP 27/MEN/II tahun 2009</p>
            <a href="pelatihan/regular/daftar/" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
                Daftar
            </a>
        </div>
    </aside>

    <!-- Konten Utama -->
    <div class="md:col-span-2 space-y-6" data-aos="fade-left">
        <img src="https://ppkdju.com/static/img/regular/1024x648/inggris.jpg" alt="Pelatihan Bahasa Inggris" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in">

        <div data-aos="fade-up" data-aos-delay="100">
            <h1 class="text-2xl font-bold text-gray-800 mb-3">Bahasa Inggris Untuk Tenaga Administrasi Profesional</h1>
            <p class="text-gray-700 leading-relaxed">
                Pelatihan Bahasa Inggris ini dirancang khusus untuk membantu peserta menguasai keterampilan komunikasi dasar
                dalam bahasa Inggris yang diperlukan di lingkungan kerja, terutama dalam situasi telepon dan interaksi di tempat kerja.
                Program ini sangat cocok bagi mereka yang ingin meningkatkan kemampuan berbicara, memahami, dan menulis dalam
                bahasa Inggris secara efektif, serta membangun kepercayaan diri dalam berkomunikasi dengan rekan kerja dan klien internasional.
            </p>
        </div>

        <!-- Penjabaran Kurikulum -->
        <div class="space-y-4">
            <div data-aos="fade-up" data-aos-delay="150">
                <h2 class="text-lg font-semibold text-gray-800">Memberi salam / Greetings</h2>
                <p class="text-gray-700 text-sm">
                    Peserta akan belajar berbagai cara yang sopan dan profesional untuk memberi salam dalam berbagai konteks, baik dalam
                    percakapan formal maupun informal.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-lg font-semibold text-gray-800">Melakukan perkenalan / Introductions</h2>
                <p class="text-gray-700 text-sm">
                    Di sini, peserta akan mempelajari cara mengenalkan diri dan orang lain dalam konteks profesional. Mereka akan dilatih
                    untuk memberikan informasi pribadi yang jelas dan tepat.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-delay="250">
                <h2 class="text-lg font-semibold text-gray-800">Menggunakan ungkapan umum dalam bertelepon</h2>
                <p class="text-gray-700 text-sm">
                    Pelatihan ini akan membekali peserta dengan berbagai ungkapan umum yang sering digunakan dalam percakapan telepon bisnis.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-lg font-semibold text-gray-800">Melakukan Panggilan Telepon</h2>
                <p class="text-gray-700 text-sm">
                    Peserta akan belajar membuat panggilan telepon yang efektif, termasuk cara mengatur jadwal percakapan, menyampaikan informasi, dan menanggapi situasi tidak terduga.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-delay="350">
                <h2 class="text-lg font-semibold text-gray-800">Menerima dan menyampaikan pesan telepon</h2>
                <p class="text-gray-700 text-sm">
                    Peserta akan dilatih menerima dan menyampaikan pesan dengan profesional, memastikan informasi yang diberikan akurat dan jelas.
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