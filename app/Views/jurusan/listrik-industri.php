<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Listrik - PPKD Jakarta Utara</title>
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
   <!-- Pastikan AOS sudah di-include di <head> -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
    <!-- Sidebar Kurikulum dan SKKNI -->
    <aside class="md:col-span-1 space-y-6" data-aos="fade-right" data-aos-duration="800">
        <div class="border rounded-lg p-4 bg-white shadow-sm" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Kurikulum</h2>
            <ul class="space-y-2 text-sm text-gray-700 list-none">
                <li>• Menerapkan prinsip–prinsip K3 di tempat kerja</li>
                <li>• Mengukur Listrik / Elektronik</li>
                <li>• Pemasangan komponen & sirkuit alat pengukur dan pembatas instalasi listrik</li>
                <li>• Pembangunan & pemasangan instalasi listrik tegangan rendah</li>
                <li>• Pembangunan & pemasangan rangkaian instalasi motor & kontrol motor listrik</li>
                <li>• Pemeriksaan & pengujian instalasi motor & kontrol listrik</li>
                <li>• Pengoperasian instalasi motor & kontrol motor listrik</li>
            </ul>
        </div>
        <div class="border p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
            <p class="text-sm text-gray-600 mb-3">No. 304 tahun 2019<br>No. 109 tahun 2018</p>
            <a href="/pendaftaran" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
                Daftar
            </a>
        </div>
    </aside>

    <!-- Konten Utama -->
    <div class="md:col-span-2 space-y-6" data-aos="fade-left" data-aos-duration="800">
        <img src="https://ppkdju.com/static/img/regular/1024x648/listrik.jpg" alt="Pelatihan Listrik Industri" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in" data-aos-delay="100">

        <div data-aos="fade-up" data-aos-delay="200">
            <h1 class="text-2xl font-bold text-gray-800 mb-3">Pemasangan Instalasi Otomasi Listrik Industri</h1>
            <p class="text-gray-700 leading-relaxed">
                Pelatihan Listrik Industri ini dirancang untuk memberikan keterampilan teknis dan pengetahuan praktis dalam bidang kelistrikan industri, dengan fokus pada penerapan prinsip-prinsip K3, pemasangan, pemeriksaan, serta pengoperasian sistem instalasi listrik industri. Peserta—teknisi, operator, atau profesional manufaktur—akan dilatih untuk memahami, membangun, dan mengoperasikan sistem kontrol motor listrik secara aman dan efisien.
            </p>
        </div>

        <!-- Penjabaran Kurikulum -->
        <div class="space-y-4 prose-custom">
            <div data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-lg font-semibold text-gray-800">Menerapkan prinsip–prinsip K3 di tempat kerja</h2>
                <p class="text-gray-700 text-sm">
                    Peserta akan mempelajari cara mengenali bahaya listrik di lingkungan industri, penggunaan alat pelindung diri (APD), dan prosedur keselamatan untuk mencegah kecelakaan listrik.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-lg font-semibold text-gray-800">Mengukur Listrik / Elektronik</h2>
                <p class="text-gray-700 text-sm">
                    Pembelajaran meliputi penggunaan multimeter dan oscilloscope untuk mengukur tegangan, arus, resistansi, dan parameter lain secara akurat sesuai prosedur industri.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-lg font-semibold text-gray-800">Pemasangan komponen & sirkuit alat pengukur dan pembatas</h2>
                <p class="text-gray-700 text-sm">
                    Peserta akan belajar untuk merancang dan memasang alat pengukur serta perangkat pembatas seperti fuse dan circuit breaker untuk menjaga keselamatan dan efisiensi sistem instalasi.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400">
                <h2 class="text-lg font-semibold text-gray-800">Pembangunan & pemasangan instalasi listrik tegangan rendah</h2>
                <p class="text-gray-700 text-sm">
                    Meliputi perencanaan sistem, pemilihan komponen, dan pembuatan sirkuit instalasi listrik tegangan rendah dalam aplikasi industri.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="500">
                <h2 class="text-lg font-semibold text-gray-800">Pembangunan & pemasangan rangkaian motor & kontrol</h2>
                <p class="text-gray-700 text-sm">
                    Penanganan instalasi motor listrik beserta sistem kendali seperti starter, relay, dan contactor agar motor bekerja sesuai kebutuhan industri.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-lg font-semibold text-gray-800">Pemeriksaan & pengujian instalasi</h2>
                <p class="text-gray-700 text-sm">
                    Teknik pemeriksaan visual dan pengujian fungsional serta keselamatan untuk memastikan instalasi beroperasi tanpa gangguan.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="700">
                <h2 class="text-lg font-semibold text-gray-800">Pengoperasian instalasi motor & kontrol motor listrik</h2>
                <p class="text-gray-700 text-sm">
                    Melatih peserta dalam mengoperasikan sistem instalasi serta kontrol motor listrik secara aman dan efisien sesuai standar operasional industri.
                </p>
            </div>
        </div>
    </div>
</section>

<?= view('layout/footer') ?>
    <script src="https://cdn.tailwindcss.com"></script>
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