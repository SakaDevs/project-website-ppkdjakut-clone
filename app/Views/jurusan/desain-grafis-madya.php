<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Desain Grafis Madya - PPKD Jakarta Utara</title>

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
  <aside class="md:col-span-1 space-y-6" data-aos="fade-right" data-aos-duration="800">
    <div class="border rounded-lg p-4 bg-white shadow-sm" data-aos="fade-up" data-aos-delay="100">
      <h2 class="text-lg font-semibold mb-4 text-gray-800">Kurikulum</h2>
      <ul class="space-y-2 text-sm text-gray-700 list-none">
        <li>• Menerapkan Prinsip Desain</li>
        <li>• Menerapkan Prinsip Komunikasi</li>
        <li>• Menyusun Design Brief</li>
        <li>• Merumuskan Konsep Desain</li>
        <li>• Mengoperasikan Perangkat Lunak Desain</li>
        <li>• Menciptakan Karya Desain</li>
        <li>• Mempresentasikan Karya Desain</li>
        <li>• Menerapkan Perlindungan Kekayaan Intelektual</li>
      </ul>
    </div>
    <div class="border p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-up" data-aos-delay="200">
      <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
      <p class="text-sm text-gray-600 mb-3">
        Nomor 126 Tahun 2023
      </p>
      <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
        Daftar
      </a>
    </div>
  </aside>

  <!-- Konten Utama -->
  <div class="md:col-span-2 space-y-6">
    <img src="https://ppkdju.com/static/img/regular/1024x648/grafis.jpg" alt="Pelatihan Desainer Grafis Madya" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in" data-aos-duration="800">

    <div data-aos="fade-up" data-aos-delay="100">
      <h1 class="text-2xl font-bold text-gray-800 mb-3">Desainer Grafis Madya</h1>
      <p class="text-gray-700 leading-relaxed">
        Pelatihan Desainer Grafis Madya dirancang untuk memberikan keterampilan menyeluruh kepada peserta dalam bidang desain grafis profesional sesuai standar industri. Materi mencakup dari prinsip desain hingga perlindungan kekayaan intelektual, melalui kombinasi teori dan praktik langsung agar peserta menjadi desainer yang kreatif, terampil, dan kompeten.
      </p>
    </div>

    <div class="space-y-4 prose-custom">
      <div data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Prinsip Desain</h2>
        <p class="text-gray-700 text-sm">
          Peserta mempelajari dasar desain seperti tata letak, tipografi, warna, dan elemen visual lainnya untuk menciptakan karya yang estetis dan efektif.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="150">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Prinsip Komunikasi</h2>
        <p class="text-gray-700 text-sm">
          Menyampaikan pesan melalui desain visual yang jelas dan menarik, dengan pemahaman audiens sebagai fokus utama.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-lg font-semibold text-gray-800">Menyusun Design Brief</h2>
        <p class="text-gray-700 text-sm">
          Mengembangkan dokumen yang merangkum kebutuhan, tujuan, dan ruang lingkup desain agar sesuai harapan klien.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="250">
        <h2 class="text-lg font-semibold text-gray-800">Merumuskan Konsep Desain</h2>
        <p class="text-gray-700 text-sm">
          Teknik brainstorming untuk mengembangkan ide kreatif menjadi konsep matang yang siap dituangkan dalam karya desain.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="300">
        <h2 class="text-lg font-semibold text-gray-800">Mengoperasikan Perangkat Lunak Desain</h2>
        <p class="text-gray-700 text-sm">
          Pelatihan penggunaan software desain populer seperti Adobe Photoshop, Illustrator, CorelDRAW, dan lainnya.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="350">
        <h2 class="text-lg font-semibold text-gray-800">Menciptakan Karya Desain</h2>
        <p class="text-gray-700 text-sm">
          Praktik pembuatan desain seperti poster, logo, brosur, dan media digital lainnya sesuai konsep yang telah disusun.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-lg font-semibold text-gray-800">Mempresentasikan Karya Desain</h2>
        <p class="text-gray-700 text-sm">
          Teknik penyampaian karya secara profesional kepada klien atau audiens agar ide tersampaikan dengan jelas dan meyakinkan.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="450">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Perlindungan Kekayaan Intelektual</h2>
        <p class="text-gray-700 text-sm">
          Pemahaman hak cipta, lisensi, dan cara melindungi karya desain agar dihargai dan terlindungi secara hukum.
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