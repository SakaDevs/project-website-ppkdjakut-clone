<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Pendingin - PPKD Jakarta Utara</title>

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
            <li>• Menerapkan prinsip‑prinsip Keselamatan dan Kesehatan Kerja di Tempat Kerja</li>
            <li>• Menerapkan Prosedur‑prosedur Mutu</li>
            <li>• Membaca Gambar Teknik</li>
            <li>• Menggunakan Perkakas Tangan</li>
            <li>• Mengukur Listrik/Elektronik</li>
            <li>• Menyolder dengan Kuningan dan/atau Perak</li>
            <li>• Mengisi Sistem Pendingin</li>
            <li>• Merawat Mesin Refrigerasi Komersial dan Industri</li>
        </ul>
        </div>
        <div class="border p-4 rounded-lg bg-gray-50 shadow-sm">
        <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
        <p class="text-sm text-gray-600 mb-3">
            No. 109 tahun 2018<br>
            No. 41 tahun 2019
        </p>
        <a href="pelatihan/regular/daftar/" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
            Daftar
        </a>
        </div>
    </aside>

    <!-- Konten Utama -->
    <div class="md:col-span-2 space-y-6">
        <img src="https://ppkdju.com/static/img/regular/1024x648/ac.jpg" alt="Pelatihan Teknik Pendingin" class="rounded-md shadow-md w-full max-h-[5   00px] object-cover">

        <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-3">Teknik Pendingin</h1>
        <p class="text-gray-700 leading-relaxed">
            Pelatihan Teknik Pendingin ini dirancang untuk memberikan peserta pemahaman dan keterampilan praktis dalam bidang teknik pendinginan dan sistem refrigerasi, baik untuk aplikasi komersial maupun industri. Pelatihan ini sangat cocok bagi teknisi, mekanik, dan operator yang bekerja dengan sistem pendingin, maupun bagi mereka yang ingin meningkatkan kemampuan dalam perawatan dan pengoperasian sistem refrigerasi secara aman dan efisien.
        </p>
        </div>

        <!-- Penjabaran Kurikulum -->
        <div class="space-y-4 prose-custom">
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Menerapkan prinsip‑prinsip Keselamatan dan Kesehatan Kerja</h2>
            <p class="text-gray-700 text-sm">
            Peserta dibekali dengan prosedur K3 khusus di bidang refrigerasi, termasuk pengenalan bahaya, penggunaan APD, dan tanggap darurat.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Menerapkan Prosedur‑prosedur Mutu</h2>
            <p class="text-gray-700 text-sm">
            Pelatihan ini mencakup standar mutu dalam setiap tahap pekerjaan guna memastikan hasil yang berkualitas dan sesuai prosedur teknis.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Membaca Gambar Teknik</h2>
            <p class="text-gray-700 text-sm">
            Mengajarkan keterampilan membaca dan memahami gambar instalasi dan komponen sistem pendingin untuk pelaksanaan teknis yang presisi.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Menggunakan Perkakas Tangan</h2>
            <p class="text-gray-700 text-sm">
            Pelatihan penggunaan alat manual seperti obeng, kunci pas, dan cutter dengan teknik yang tepat dan aman.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Mengukur Listrik/Elektronik</h2>
            <p class="text-gray-700 text-sm">
            Mempelajari penggunaan multimeter dan alat ukur lainnya untuk mengukur tegangan, arus, dan resistansi dalam sistem pendingin.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Menyolder dengan Kuningan dan/atau Perak</h2>
            <p class="text-gray-700 text-sm">
            Teknik soldering yang benar untuk memastikan sambungan pipa dan komponen sistem refrigerasi tahan lama dan bebas kebocoran.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Mengisi Sistem Pendingin</h2>
            <p class="text-gray-700 text-sm">
            Pembekalan tentang cara mengisi refrigeran yang tepat ke sistem, termasuk pengetahuan jenis refrigeran dan cara mencegah kebocoran.
            </p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Merawat Mesin Refrigerasi Komersial dan Industri</h2>
            <p class="text-gray-700 text-sm">
            Teknik perawatan rutin seperti cleaning, pengecekan level refrigeran, dan diagnosis masalah umum pada sistem pendingin.
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