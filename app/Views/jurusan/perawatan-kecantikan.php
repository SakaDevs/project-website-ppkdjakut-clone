<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Penjahitan Busana - PPKD Jakarta Utara</title>
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
        <li>• Melakukan persiapan kerja pada usaha kecantikan</li>
        <li>• Melakukan komunikasi di tempat kerja pada usaha kecantikan</li>
        <li>• Mengeringkan rambut dengan alat pengering</li>
        <li>• Melakukan perawatan wajah dasar</li>
        <li>• Mewarnai rambut</li>
        <li>• Melakukan penyucian kulit kepala dan rambut</li>
        <li>• Menerapkan keselamatan dan kesehatan pada usaha kecantikan</li>
        <li>• Merias wajah sehari-hari</li>
        <li>• Mengevaluasi kegiatan penjualan jasa pada usaha kecantikan</li>
      </ul>
    </div>
    <div class="border p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-up" data-aos-delay="300">
      <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
      <p class="text-sm text-gray-600 mb-3">No. 180 Tahun 2021</p>
      <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
        Daftar
      </a>
    </div>
  </aside>

  <!-- Konten Utama -->
  <div class="md:col-span-2 space-y-6" data-aos="fade-left" data-aos-delay="100">
    <img src="https://ppkdju.com/static/img/regular/1024x648/rias.jpg" alt="Pelatihan Perawatan Kecantikan" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in" data-aos-delay="200">

    <div data-aos="fade-up" data-aos-delay="300">
      <h1 class="text-2xl font-bold text-gray-800 mb-3">Perawatan Kecantikan</h1>
      <p class="text-gray-700 leading-relaxed">
        Pelatihan Perawatan Kecantikan ini dirancang untuk memberikan keterampilan praktis dalam bidang kecantikan, mencakup aspek perawatan wajah, rambut, komunikasi layanan, serta prosedur kesehatan dan keselamatan kerja untuk industri kecantikan. :contentReference[oaicite:0]{index=0}
      </p>
    </div>

    <div class="space-y-4 prose-custom">
      <div data-aos="fade-up" data-aos-delay="350">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan persiapan kerja pada usaha kecantikan</h2>
        <p class="text-gray-700 text-sm">Peserta dilatih menyiapkan ruang kerja, alat, dan bahan agar sesuai standar kebersihan dan kesiapan kerja.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan komunikasi di tempat kerja</h2>
        <p class="text-gray-700 text-sm">Pelatihan mencakup teknik komunikasi efektif dengan pelanggan dan rekan kerja untuk pelayanan profesional.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="450">
        <h2 class="text-lg font-semibold text-gray-800">Mengeringkan rambut dengan alat pengering</h2>
        <p class="text-gray-700 text-sm">Peserta diajarkan teknik mengeringkan rambut yang benar dan aman.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="500">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan perawatan wajah dasar</h2>
        <p class="text-gray-700 text-sm">Pelatihan teknik dasar perawatan wajah seperti pembersihan, pijatan ringan, dan penggunaan produk sesuai jenis kulit. </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="550">
        <h2 class="text-lg font-semibold text-gray-800">Mewarnai rambut</h2>
        <p class="text-gray-700 text-sm">Peserta belajar memilih warna, teknik pewarnaan, dan perawatan setelah pewarnaan agar rambut tetap sehat.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="600">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan penyucian kulit kepala dan rambut</h2>
        <p class="text-gray-700 text-sm">Pelatihan teknik penyucian yang baik untuk menjaga kebersihan rambut dan kulit kepala.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="650">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan keselamatan dan kesehatan pada usaha kecantikan</h2>
        <p class="text-gray-700 text-sm">Pengajaran protokol keselamatan dan kesehatan penting dalam lingkungan kerja kecantikan.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="700">
        <h2 class="text-lg font-semibold text-gray-800">Merias wajah sehari-hari</h2>
        <p class="text-gray-700 text-sm">Teknik makeup natural untuk penggunaan sehari-hari dengan pendekatan praktis dan estetis.</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="750">
        <h2 class="text-lg font-semibold text-gray-800">Mengevaluasi kegiatan penjualan jasa</h2>
        <p class="text-gray-700 text-sm">Pelatihan cara mengevaluasi dan meningkatkan strategi penjualan layanan kecantikan.</p>
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