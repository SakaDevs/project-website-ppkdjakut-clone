<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan TKJ - PPKD Jakarta Utara</title>

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
    <!-- Tambahkan link AOS di bagian <head> -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
  <!-- Sidebar Kurikulum dan SKKNI -->
  <aside class="md:col-span-1 space-y-6">
    <div class="border rounded-lg p-4 bg-white shadow-sm" data-aos="fade-right" data-aos-duration="800">
      <h2 class="text-lg font-semibold mb-4 text-gray-800">Kurikulum</h2>
      <ul class="space-y-2 text-sm text-gray-700 list-none">
        <li>• Mengidentifikasi Perangkat Penyusun Komputer</li>
        <li>• Mengidentifikasi Spesifikasi Perangkat Komputer</li>
        <li>• Memasang Hard Disk, Motherboard, Memory, Processor & Optical Drive</li>
        <li>• Melakukan Setting BIOS</li>
        <li>• Melakukan Instalasi Sistem Operasi</li>
        <li>• Melakukan Instalasi Software Aplikasi</li>
        <li>• Melakukan Recovery Data</li>
        <li>• Merancang Pengalamatan Jaringan</li>
        <li>• Memasang Jaringan Nirkabel</li>
        <li>• Mengkonfigurasi Switch pada Jaringan</li>
        <li>• Mengkonfigurasi Routing dalam Satu Autonomous System</li>
        <li>• Mengkonfigurasi Routing antar Autonomous System</li>
      </ul>
    </div>
    <div class="border p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-right" data-aos-delay="150" data-aos-duration="800">
      <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
      <p class="text-sm text-gray-600 mb-3">
        No. 285 Tahun 2016  
        No. 321 Tahun 2016
      </p>
      <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
        Daftar
      </a>
    </div>
  </aside>

  <!-- Konten Utama -->
  <div class="md:col-span-2 space-y-6">
    <img src="https://ppkdju.com/static/img/regular/1024x648/tekom.jpg" 
         alt="Pelatihan Teknisi Komputer dan Jaringan" 
         class="rounded-md shadow-md w-full max-h-[500px] object-cover"
         data-aos="zoom-in" data-aos-duration="900">

    <div data-aos="fade-up" data-aos-duration="800">
      <h1 class="text-2xl font-bold text-gray-800 mb-3">Teknisi Komputer dan Jaringan</h1>
      <p class="text-gray-700 leading-relaxed">
        Pelatihan Teknisi Komputer dan Jaringan dirancang untuk memberikan peserta keahlian teknis dalam merakit, menginstal, mengelola, dan mengoptimalkan perangkat komputer serta jaringan. Integrasi teori dan praktik memungkinkan peserta menguasai teknologi sesuai standar industri.
      </p>
    </div>

    <div class="space-y-4 prose-custom">
      <div data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-lg font-semibold text-gray-800">Mengidentifikasi Perangkat Penyusun Komputer</h2>
        <p class="text-gray-700 text-sm">
          Peserta mempelajari fungsi komponen utama komputer, seperti motherboard, prosesor, memori, hard disk, dan lainnya.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="150">
        <h2 class="text-lg font-semibold text-gray-800">Mengidentifikasi Spesifikasi Perangkat Komputer</h2>
        <p class="text-gray-700 text-sm">
          Peserta dilatih mengevaluasi spesifikasi perangkat keras berdasarkan kebutuhan, performa, dan efisiensi biaya.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-lg font-semibold text-gray-800">Memasang Hard Disk, Motherboard, Memory, Processor & Optical Drive</h2>
        <p class="text-gray-700 text-sm">
          Terampil dalam merakit perangkat keras dengan prosedur yang benar dan aman.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="250">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan Setting BIOS</h2>
        <p class="text-gray-700 text-sm">
          Mengoptimalkan performa dan kompatibilitas perangkat melalui konfigurasi BIOS.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="300">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan Instalasi Sistem Operasi</h2>
        <p class="text-gray-700 text-sm">
          Menginstal OS seperti Windows atau Linux, termasuk partisi dan driver.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="350">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan Instalasi Software Aplikasi</h2>
        <p class="text-gray-700 text-sm">
          Menginstal dan mengonfigurasi aplikasi, serta troubleshooting jika diperlukan.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan Recovery Data</h2>
        <p class="text-gray-700 text-sm">
          Teknik pemulihan data dari perangkat penyimpanan yang rusak atau kehilangan data.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="450">
        <h2 class="text-lg font-semibold text-gray-800">Merancang Pengalamatan Jaringan</h2>
        <p class="text-gray-700 text-sm">
          Dasar pengalamatan IP, subnetting, dan penggunaan protokol jaringan.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="500">
        <h2 class="text-lg font-semibold text-gray-800">Memasang Jaringan Nirkabel</h2>
        <p class="text-gray-700 text-sm">
          Konfigurasi Wi-Fi agar jangkauan dan keamanan optimal.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="550">
        <h2 class="text-lg font-semibold text-gray-800">Mengkonfigurasi Switch pada Jaringan</h2>
        <p class="text-gray-700 text-sm">
          Manajemen lalu lintas jaringan dan segmentasi melalui VLAN.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="600">
        <h2 class="text-lg font-semibold text-gray-800">Mengkonfigurasi Routing dalam Satu Autonomous System</h2>
        <p class="text-gray-700 text-sm">
          Routing dinamis menggunakan protokol seperti OSPF atau RIP.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="650">
        <h2 class="text-lg font-semibold text-gray-800">Mengkonfigurasi Routing antar Autonomous System</h2>
        <p class="text-gray-700 text-sm">
          Konfigurasi routing antar sistem otonom menggunakan BGP.
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