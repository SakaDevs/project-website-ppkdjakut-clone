<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Editor Video - PPKD Jakarta Utara</title>
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
        <li>• Melaksanakan Prosedur Keselamatan dan Kesehatan Kerja (K3) di Tempat Kerja</li>
        <li>• Menerapkan Keamanan Data (Master Shot dan Master Edit)</li>
        <li>• Menerapkan Mutu Produk</li>
        <li>• Melakukan Komunikasi yang Baik dengan Sutradara dan Rekan Kerja</li>
        <li>• Menjalin Kerja Sama dengan Pihak Luar/Client</li>
        <li>• Melakukan Instalasi Peralatan (Video Player, Komputer, dan Pendukungnya)</li>
        <li>• Mempersiapkan Materi Sesuai Format yang Diinginkan</li>
        <li>• Menyunting Audio dan/atau Video Sesuai Tuntutan Naskah</li>
        <li>• Menambahkan Elemen Penunjang Gambar dan Suara (Titling, Voice Over, dll.)</li>
        <li>• Mengekspor Hasil Editing ke Format yang Diperlukan (Export to Media)</li>
        <li>• Membuat Catatan pada Formulir yang Tersedia</li>
      </ul>
    </div>
    <div class="border p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-up" data-aos-delay="300">
      <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
      <p class="text-sm text-gray-600 mb-3">No. 118 Tahun 2014</p>
      <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
        Daftar
      </a>
    </div>
  </aside>

  <!-- Konten Utama -->
  <div class="md:col-span-2 space-y-6" data-aos="fade-left" data-aos-delay="100">
    <img src="https://ppkdju.com/static/img/regular/1024x648/editorvideo.jpg" alt="Pelatihan Editor Video" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in" data-aos-delay="200">

    <div data-aos="fade-up" data-aos-delay="300">
      <h1 class="text-2xl font-bold text-gray-800 mb-3">Editor Video</h1>
      <p class="text-gray-700 leading-relaxed">
        Pelatihan Editor Video dirancang untuk memberikan keterampilan profesional dalam mengolah video sesuai
        standar industri—mulai dari persiapan hingga produksi akhir, mencakup editing audio, visual,
        penambahan elemen pendukung, hingga ekspor dan dokumentasi.  
      </p>
    </div>

    <div class="space-y-4 prose-custom">
      <div data-aos="fade-up" data-aos-delay="350">
        <h2 class="text-lg font-semibold text-gray-800">Melaksanakan Prosedur K3 di Tempat Kerja</h2>
        <p class="text-gray-700 text-sm">
          Peserta memahami pentingnya penerapan K3 di ruang kerja editing untuk menjaga keselamatan diri dan rekan kerja.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Keamanan Data (Master Shot & Master Edit)</h2>
        <p class="text-gray-700 text-sm">
          Peserta belajar menyimpan dan melindungi arsip video asli untuk mencegah kerusakan atau kehilangan.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="450">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Mutu Produk</h2>
        <p class="text-gray-700 text-sm">
          Fokus pada standar kualitas output video yang sesuai profesional dan kebutuhan audiens atau klien.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="500">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan Komunikasi dengan Sutradara & Rekan Kerja</h2>
        <p class="text-gray-700 text-sm">
          Praktik komunikasi efektif dalam tim produksi serta pemahaman ruang dan peran antar profesi.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="550">
        <h2 class="text-lg font-semibold text-gray-800">Menjalin Kerja Sama dengan Client</h2>
        <p class="text-gray-700 text-sm">
          Pelatihan membangun hubungan profesional dengan klien untuk memenuhi ekspektasi hasil akhir.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="600">
        <h2 class="text-lg font-semibold text-gray-800">Instalasi Peralatan Editing</h2>
        <p class="text-gray-700 text-sm">
          Peserta dilatih memasang dan menyiapkan perangkat editing video—perangkat keras dan aplikasi—dengan tepat.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="650">
        <h2 class="text-lg font-semibold text-gray-800">Persiapan Materi Sesuai Format</h2>
        <p class="text-gray-700 text-sm">
          Fokus pada standarisasi format file input agar kompatibel dengan proses editing dan distribusi.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="700">
        <h2 class="text-lg font-semibold text-gray-800">Editing Audio & Video</h2>
        <p class="text-gray-700 text-sm">
          Teknik menyunting suara dan gambar berdasarkan naskah menggunakan tools editing modern.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="750">
        <h2 class="text-lg font-semibold text-gray-800">Menambahkan Elemen Penunjang Gambar dan Suara</h2>
        <p class="text-gray-700 text-sm">
          Praktik titling, voice-over, dan penambahan efek visual/suara untuk memperkaya hasil editing.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="800">
        <h2 class="text-lg font-semibold text-gray-800">Export ke Format yang Diperlukan</h2>
        <p class="text-gray-700 text-sm">
          Eksport video akhir dalam berbagai format sesuai kebutuhan distribusi—TV, media sosial, atau presentasi.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="850">
        <h2 class="text-lg font-semibold text-gray-800">Membuat Catatan pada Formulir Editing</h2>
        <p class="text-gray-700 text-sm">
          Keterampilan dokumentasi profesional dalam mencatat setiap proses editing untuk revisi dan pelaporan.
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