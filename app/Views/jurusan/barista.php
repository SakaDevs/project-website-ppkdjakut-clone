<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Barista - PPKD Jakarta Utara</title>

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
  <aside class="md:col-span-1 space-y-6" data-aos="fade-right" data-aos-delay="100">
    <div class="border rounded-lg p-4 bg-white shadow-sm" data-aos="fade-up" data-aos-delay="200">
      <h2 class="text-lg font-semibold mb-4 text-gray-800">Kurikulum</h2>
      <ul class="space-y-2 text-sm text-gray-700 list-none">
        <li>• Mengelola Bahan Baku</li>
        <li>• Mengelola Peralatan dan Perlengkapan</li>
        <li>• Mengelola Area Kerja</li>
        <li>• Menangani Pelanggan</li>
        <li>• Mengoperasikan Peralatan</li>
        <li>• Mengembangkan Produk Minuman Kopi</li>
        <li>• Mengikuti Prosedur Kesehatan, Keselamatan & Keamanan di Tempat Kerja</li>
        <li>• Menangani Situasi Konflik</li>
        <li>• Berkomunikasi Lisan dalam Bahasa Inggris (Tingkat Operasional Dasar)</li>
      </ul>
    </div>
    <div class="border p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-up" data-aos-delay="300">
      <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
      <p class="text-sm text-gray-600 mb-3">
        No. 370 Tahun 2013<br>
        No. 145 Tahun 2018
      </p>
      <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
        Daftar
      </a>
    </div>
  </aside>

  <!-- Konten Utama -->
  <div class="md:col-span-2 space-y-6" data-aos="fade-left" data-aos-delay="100">
    <img src="https://ppkdju.com/static/img/regular/1024x648/barista.jpg" alt="Pelatihan Barista" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in" data-aos-delay="200">

    <div data-aos="fade-up" data-aos-delay="300">
      <h1 class="text-2xl font-bold text-gray-800 mb-3">Barista</h1>
      <p class="text-gray-700 leading-relaxed">
        Pelatihan Barista ini dirancang untuk memberikan keterampilan praktis yang dibutuhkan dalam dunia industri kopi dan kedai kopi. Peserta akan dibekali dengan pengetahuan dan keterampilan untuk mengelola bahan baku, peralatan, dan area kerja, serta memberikan pelayanan pelanggan yang baik.
      </p>
    </div>

    <div class="space-y-4 prose-custom">
      <div data-aos="fade-up" data-aos-delay="350">
        <h2 class="text-lg font-semibold text-gray-800">Mengelola Bahan Baku</h2>
        <p class="text-gray-700 text-sm">
          Peserta akan mempelajari cara memilih biji kopi berkualitas, menyimpan dan menggunakan bahan baku sesuai standar operasional.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-lg font-semibold text-gray-800">Mengelola Peralatan dan Perlengkapan</h2>
        <p class="text-gray-700 text-sm">
          Peserta diajarkan merawat dan mengelola mesin espresso, grinder, dan peralatan penyajian agar selalu optimal.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="450">
        <h2 class="text-lg font-semibold text-gray-800">Mengelola Area Kerja</h2>
        <p class="text-gray-700 text-sm">
          Teknik menjaga kebersihan dan organisasi area kerja barista agar pelanggan merasa nyaman dan operasional lancar.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="500">
        <h2 class="text-lg font-semibold text-gray-800">Menangani Pelanggan</h2>
        <p class="text-gray-700 text-sm">
          Pelatihan interaksi ramah-menyenangkan, indentifikasi kebutuhan pelanggan, dan layanan profesional saat menyajikan minuman.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="550">
        <h2 class="text-lg font-semibold text-gray-800">Mengoperasikan Peralatan</h2>
        <p class="text-gray-700 text-sm">
          Peserta dilatih mengoperasikan peralatan kopi seperti mesin espresso dan perangkat pendukung lainnya.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="600">
        <h2 class="text-lg font-semibold text-gray-800">Mengembangkan Produk Minuman Kopi</h2>
        <p class="text-gray-700 text-sm">
          Membuat varian minuman kopi baik tradisional maupun inovatif sesuai teknik penyeduhan dan presentasi.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="650">
        <h2 class="text-lg font-semibold text-gray-800">Mengikuti Prosedur K3 di Tempat Kerja</h2>
        <p class="text-gray-700 text-sm">
          Prosedur keselamatan dan kesehatan dalam industri kedai kopi untuk melindungi pekerja, rekan, dan pelanggan.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="700">
        <h2 class="text-lg font-semibold text-gray-800">Menangani Situasi Konflik</h2>
        <p class="text-gray-700 text-sm">
          Strategi menghadapi situasi sulit atau konflik dengan pelanggan/rekan kerja secara profesional.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="750">
        <h2 class="text-lg font-semibold text-gray-800">Berkomunikasi Dalam Bahasa Inggris (Operasional Dasar)</h2>
        <p class="text-gray-700 text-sm">
          Pelatihan komunikasi lisan dasar dalam bahasa Inggris untuk mendukung pelayanan kepada pelanggan internasional atau memahami instruksi asing.
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