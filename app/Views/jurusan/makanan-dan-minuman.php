<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Makanan dan Minuman - PPKD Jakarta Utara</title>

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
        <li>• Melakukan kerjasama dengan kolega dan pelanggan</li>
        <li>• Membersihkan lokasi/area dan peralatan</li>
        <li>• Menyajikan minuman non-alkohol</li>
        <li>• Menggunakan metode dasar memasak</li>
        <li>• Menyiapkan appetizer dan salad</li>
        <li>• Menyiapkan sup</li>
        <li>• Menyiapkan sayuran, telur, dan makanan dari tepung</li>
        <li>• Menyiapkan dan memasak unggas serta binatang buruan</li>
        <li>• Menyiapkan makanan dessert (panas & dingin)</li>
        <li>• Menyiapkan pastry, kue, dan makanan beragi</li>
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
    <img src="https://ppkdju.com/static/img/regular/1024x648/boga.jpg" alt="Pelatihan Penyiapan Layanan Produk Makanan dan Minuman" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in" data-aos-delay="200">

    <div data-aos="fade-up" data-aos-delay="300">
      <h1 class="text-2xl font-bold text-gray-800 mb-3">Penyiapan Layanan Produk Makanan dan Minuman</h1>
      <p class="text-gray-700 leading-relaxed">
        Pelatihan “Penyiapan Layanan Produk Makanan dan Minuman” bertujuan membekali peserta dengan keterampilan di industri kuliner dan perhotelan, mencakup teknik penyajian makanan, kebersihan, dan komunikasi profesional dalam melayani kolega maupun pelanggan.
      </p>
    </div>

    <div class="space-y-4 prose-custom">
      <div data-aos="fade-up" data-aos-delay="350">
        <h2 class="text-lg font-semibold text-gray-800">Melakukan kerjasama dengan kolega dan pelanggan</h2>
        <p class="text-gray-700 text-sm">
          Membangun komunikasi efektif—verbal maupun tertulis—untuk mendukung kerja tim dan kepuasan pelanggan.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-lg font-semibold text-gray-800">Membersihkan lokasi/area dan peralatan</h2>
        <p class="text-gray-700 text-sm">
          Menjaga kebersihan area kerja dan peralatan sesuai standar sanitasi demi keamanan makanan.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="450">
        <h2 class="text-lg font-semibold text-gray-800">Menyajikan minuman non-alkohol</h2>
        <p class="text-gray-700 text-sm">
          Teknik penyajian minuman non-alkohol yang profesional dengan estetika penyajian yang baik.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="500">
        <h2 class="text-lg font-semibold text-gray-800">Menggunakan metode dasar memasak</h2>
        <p class="text-gray-700 text-sm">
          Menguasai teknik memasak dasar seperti merebus, menggoreng, mengukus, dan memanggang.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="550">
        <h2 class="text-lg font-semibold text-gray-800">Menyiapkan appetizer dan salad</h2>
        <p class="text-gray-700 text-sm">
          Menyajikan hidangan pembuka yang menarik dengan menjaga kesegaran dan estetika penyajian.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="600">
        <h2 class="text-lg font-semibold text-gray-800">Menyiapkan sup</h2>
        <p class="text-gray-700 text-sm">
          Teknik membuat sup bervariasi mulai dari sup bening hingga sup kental dengan cita rasa seimbang.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="650">
        <h2 class="text-lg font-semibold text-gray-800">Menyiapkan sayuran, telur, dan makanan dari tepung</h2>
        <p class="text-gray-700 text-sm">
          Mengolah berbagai bahan pokok menjadi hidangan lezat dan kreatif.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="700">
        <h2 class="text-lg font-semibold text-gray-800">Menyiapkan dan memasak unggas & binatang buruan</h2>
        <p class="text-gray-700 text-sm">
          Teknik pengolahan unggas dan daging buruan untuk menghasilkan tekstur dan rasa yang ideal.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="750">
        <h2 class="text-lg font-semibold text-gray-800">Menyiapkan makanan dessert (panas & dingin)</h2>
        <p class="text-gray-700 text-sm">
          Membuat hidangan penutup yang nikmat dan menarik secara visual.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="800">
        <h2 class="text-lg font-semibold text-gray-800">Menyiapkan pastry, kue & makanan beragi</h2>
        <p class="text-gray-700 text-sm">
          Mengolah adonan, fermentasi, dan pembuatan pastry atau roti dengan teknik baku industri.
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