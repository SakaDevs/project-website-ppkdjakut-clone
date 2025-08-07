<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Otomotif - PPKD Jakarta Utara</title>

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
            <li>• Melaksanakan Keselamatan dan Kesehatan Kerja (K3)</li>
            <li>• Membaca dan memahami gambar teknik</li>
            <li>• Menggunakan peralatan dan perlengkapan bengkel</li>
            <li>• Menggunakan alat ukur</li>
            <li>• Merawat celah klep (renggang klep)</li>
            <li>• Memeriksa & mengganti oli mesin, oli transmisi, & filter oli</li>
            <li>• Memeriksa sistem pelumasan mesin</li>
            <li>• Melakukan perawatan busi</li>
            <li>• Merawat sistem pendinginan</li>
            <li>• Merawat sistem injeksi</li>
            <li>• Menyetel free play throttle gas</li>
            <li>• Merawat filter udara</li>
            <li>• Merawat sistem kopling</li>
            <li>• Memperbaiki sistem pengapian</li>
            <li>• Merawat sistem pengereman</li>
            <li>• Merawat sistem kemudi</li>
            <li>• Memeriksa keolengan roda</li>
            <li>• Mengganti rantai roda</li>
            <li>• Merawat baterai</li>
            <li>• Merawat sistem sinyal dan penerangan</li>
            <li>• Membersihkan injector</li>
            <li>• Mendiagnosis sistem injeksi</li>
            <li>• Mengoperasikan alat diagnostik</li>
        </ul>
        </div>
        <div class="border p-4 rounded-lg bg-gray-50 shadow-sm">
        <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
        <p class="text-sm text-gray-600 mb-3">No. 147 Tahun 2019</p>
        <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
            Daftar
        </a>
        </div>
    </aside>

    <!-- Konten Utama -->
    <div class="md:col-span-2 space-y-6">
        <img src="https://ppkdju.com/static/img/regular/1024x648/motor.jpg" alt="Pelatihan Teknik Sepeda Motor" class="rounded-md shadow-md w-full max-h-[500px] object-cover">

        <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-3">Teknik Sepeda Motor</h1>
        <p class="text-gray-700 leading-relaxed">
            Pelatihan Kejuruan Otomotif Sepeda Motor ini dirancang untuk mempersiapkan peserta dalam menguasai berbagai keterampilan teknis yang diperlukan untuk memelihara, memperbaiki, dan merawat sepeda motor—khususnya aspek perawatan dan perbaikan mesin serta sistem pendukungnya. Tujuannya, mencetak teknisi yang profesional dan kompeten sesuai dengan standar industri otomotif. :contentReference[oaicite:0]{index=0}
        </p>
        </div>

        <div class="space-y-4 prose-custom">
        <!-- Contoh penjabaran sebagian kurikulum -->
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Melaksanakan Keselamatan dan Kesehatan Kerja (K3)</h2>
            <p class="text-gray-700 text-sm">
            Peserta akan dibekali prosedur K3 penting untuk lingkungan bengkel, mulai dari penggunaan APD hingga identifikasi bahaya kerja.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Membaca dan memahami gambar teknik</h2>
            <p class="text-gray-700 text-sm">
            Melatih kemampuan membaca blueprint atau diagram komponen motor penting untuk diagnosis dan perbaikan yang presisi.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Menggunakan alat ukur</h2>
            <p class="text-gray-700 text-sm">
            Peserta belajar menggunakan alat ukur seperti feeler gauge, mikrometer, dan multimeter sesuai dengan prosedur kerja.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Perawatan sistem injeksi dan pendinginan</h2>
            <p class="text-gray-700 text-sm">
            Fokus pada perawatan sistem injeksi bahan bakar dan sistem pendinginan motor agar performa tetap optimal.
            </p>
        </div>
        <!-- Tambahkan detail lainnya sesuai kebutuhan -->
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