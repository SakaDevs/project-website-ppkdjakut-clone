<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Perhotelan - PPKD Jakarta Utara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
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
            color: #0891b2;
            font-weight: bold;
            display: inline-block; 
            width: 1em;
            margin-left: -1.5em;
            position: absolute;
            left: 0.5em;
        }
        .footer-bg {
            background-color: #0f172a;
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
        <li>• Mengembangkan Pengetahuan tentang Industri Perhotelan</li>
        <li>• Melakukan Komunikasi melalui Telepon, Grooming, Greeting & Bidding Farewell</li>
        <li>• Melakukan Kerjasama dengan Kolega dan Pelanggan</li>
        <li>• Bekerja dalam Lingkungan Sosial yang Beragam</li>
        <li>• Inventory, Housekeeping Department & Safety</li>
        <li>• Membersihkan Lokasi/Area dan Peralatan</li>
        <li>• Membersihkan Dinding & Kaca Luar dengan Peralatan Khusus</li>
        <li>• Menyediakan Layanan Housekeeping untuk Tamu</li>
        <li>• Menyiapkan Kamar untuk Tamu</li>
        <li>• Menyediakan Layanan Room Butler & Turn Down</li>
        <li>• Menangani Linen dan Pakaian Tamu</li>
        <li>• Menyediakan Layanan Valet</li>
        <li>• Mengikuti Prosedur Layanan Linen & Seragam Kerja</li>
        <li>• Merencanakan Kebutuhan Seragam Karyawan</li>
        <li>• Menangani Situasi Konflik</li>
      </ul>
    </div>
    <div class="border p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-up" data-aos-delay="300">
      <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
      <p class="text-sm text-gray-600 mb-3">No. 145 Tahun 2018</p>
      <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
        Daftar
      </a>
    </div>
  </aside>

  <!-- Konten Utama -->
  <div class="md:col-span-2 space-y-6" data-aos="fade-left" data-aos-delay="100">
    <img src="https://ppkdju.com/static/img/regular/1024x648/graha.jpg" alt="Pelatihan Perhotelan" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in" data-aos-delay="200">

    <div data-aos="fade-up" data-aos-delay="300">
      <h1 class="text-2xl font-bold text-gray-800 mb-3">Perhotelan</h1>
      <p class="text-gray-700 leading-relaxed">
        Pelatihan Perhotelan ini bertujuan untuk membekali peserta dengan keterampilan dan pengetahuan praktis dalam sektor industri perhotelan, terutama terkait pelayanan dan manajemen operasional hotel. Peserta dibekali keahlian mendalam untuk mendukung operasional hotel yang efisien dan pelayanan terbaik kepada tamu.
      </p>
    </div>

    <div class="space-y-4 prose-custom">
      <div data-aos="fade-up" data-aos-delay="350">
        <h2 class="text-lg font-semibold text-gray-800">Mengembangkan Pengetahuan tentang Industri Perhotelan</h2>
        <p class="text-gray-700 text-sm">
            Pelatihan Perhotelan ini bertujuan untuk memberikan keterampilan praktis dan pengetahuan yang diperlukan untuk bekerja di industri perhotelan, terutama dalam aspek pelayanan dan manajemen operasional hotel. Peserta akan dilatih dalam berbagai unit kompetensi yang mendukung peran mereka dalam memberikan layanan terbaik kepada tamu dan menjalankan operasional hotel yang efisien.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-lg font-semibold text-gray-800">Komunikasi melalui Telepon, Grooming, Greeting & Bidding Farewell</h2>
        <p class="text-gray-700 text-sm">
           Pelatihan ini mengajarkan keterampilan komunikasi melalui telepon dengan cara yang profesional, serta teknik grooming, menyambut, dan mengantar tamu dengan sopan dan ramah.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="450">
        <h2 class="text-lg font-semibold text-gray-800">Kerjasama dengan Kolega dan Pelanggan</h2>
        <p class="text-gray-700 text-sm">
           Peserta akan dilatih untuk bekerja sama secara efektif dengan rekan kerja dan pelanggan, menciptakan suasana kerja yang harmonis serta meningkatkan kualitas pelayanan.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="500">
        <h2 class="text-lg font-semibold text-gray-800">Bekerja dalam Lingkungan Sosial yang Beragam</h2>
        <p class="text-gray-700 text-sm">
           Peserta akan belajar beradaptasi dalam lingkungan sosial yang multikultural dan beragam, meningkatkan kemampuan untuk bekerja dengan berbagai latar belakang tamu dan rekan kerja.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="550">
        <h2 class="text-lg font-semibold text-gray-800">Inventory, Housekeeping, dan Prosedur Keselamatan</h2>
        <p class="text-gray-700 text-sm">
           Peserta akan memahami peran departemen housekeeping dalam menjaga kebersihan dan kenyamanan tamu, serta pentingnya mengikuti prosedur keselamatan dan keamanan dalam bekerja.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="600">
        <h2 class="text-lg font-semibold text-gray-800">Membersihkan Area, Dinding, & Kaca dengan Peralatan Khusus</h2>
        <p class="text-gray-700 text-sm">
           Pelatihan mencakup keterampilan dalam membersihkan dan merawat area hotel, termasuk ruang publik dan peralatan yang digunakan dalam operasional hotel.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="650">
        <h2 class="text-lg font-semibold text-gray-800">Layanan Housekeeping dan Room Butler</h2>
        <p class="text-gray-700 text-sm">
           Peserta akan diajarkan teknik pembersihan dinding dan kaca luar gedung hotel menggunakan alat bantu khusus untuk memastikan kebersihan dan tampilan yang rapi.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="700">
        <h2 class="text-lg font-semibold text-gray-800">Layanan Turn Down dan Penanganan Linen Tamu</h2>
        <p class="text-gray-700 text-sm">
           Pelatihan ini meliputi penyediaan layanan housekeeping sesuai dengan standar, seperti pembersihan kamar dan pemeliharaan fasilitas yang ada di dalamnya.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="750">
        <h2 class="text-lg font-semibold text-gray-800">Layanan Valet dan Seragam Kerja</h2>
        <p class="text-gray-700 text-sm">
           Peserta akan belajar cara menyiapkan kamar untuk tamu, memastikan kenyamanan dan kebersihan kamar sesuai dengan standar hotel.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="800">
        <h2 class="text-lg font-semibold text-gray-800">Perencanaan Seragam Karyawan dan Penanganan Konflik</h2>
        <p class="text-gray-700 text-sm">
           Peserta akan memahami cara merencanakan kebutuhan seragam bagi karyawan hotel, mengelola inventaris seragam dan memastikan kesesuaian dengan standar hotel.
        </p>
      </div>
    </div>
  </div>
</section>

<?= view('layout/footer') ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
        });
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelectorAll('#mobile-menu a, #navbar a');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });
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