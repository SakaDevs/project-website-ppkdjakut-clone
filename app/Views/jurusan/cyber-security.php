<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Cyber Security - PPKD Jakarta Utara</title>
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
        <li>• Menerapkan Prinsip Perlindungan Informasi</li>
        <li>• Menerapkan Prinsip Keamanan Informasi untuk Penggunaan Jaringan Internet</li>
        <li>• Menerapkan Prinsip Keamanan Informasi pada Transaksi Elektronika</li>
        <li>• Melaksanakan Kebijakan Keamanan Informasi</li>
        <li>• Mengaplikasikan Ketentuan/Persyaratan Keamanan Informasi</li>
        <li>• Mengelola Log</li>
        <li>• Menerapkan Kontrol Akses berdasarkan Metodologi yang Diterapkan</li>
      </ul>
    </div>
    <div class="border p-4 rounded-lg bg-gray-50 shadow-sm" data-aos="fade-up" data-aos-delay="300">
      <h3 class="text-sm font-medium text-gray-700 mb-2">SKKNI</h3>
      <p class="text-sm text-gray-600 mb-3">No. 055 Tahun 2015</p>
      <a href="/pelatihan/regular/daftar" class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded hover:bg-blue-700">
        Daftar
      </a>
    </div>
  </aside>

  <!-- Konten Utama -->
  <div class="md:col-span-2 space-y-6" data-aos="fade-left" data-aos-delay="100">
    <img src="https://ppkdju.com/static/img/regular/1024x648/cyber.jpg" alt="Pelatihan Junior Cyber Security" class="rounded-md shadow-md w-full max-h-[500px] object-cover" data-aos="zoom-in" data-aos-delay="200">

    <div data-aos="fade-up" data-aos-delay="300">
      <h1 class="text-2xl font-bold text-gray-800 mb-3">Junior Cyber Security</h1>
      <p class="text-gray-700 leading-relaxed">
        Pelatihan Junior Cyber Security dirancang untuk memberikan pemahaman dan keterampilan dasar kepada peserta dalam menjaga keamanan informasi, melindungi data, dan menerapkan langkah-langkah keamanan siber yang sesuai dengan standar industri. Peserta akan dilatih secara teori dan praktik sehingga mampu mengenali, mencegah, dan menangani risiko keamanan informasi dalam berbagai konteks, seperti jaringan internet dan transaksi elektronik.
      </p>
    </div>

    <div class="space-y-4 prose-custom">
      <div data-aos="fade-up" data-aos-delay="350">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Prinsip Perlindungan Informasi</h2>
        <p class="text-gray-700 text-sm">
          Peserta akan mempelajari dasar-dasar perlindungan informasi, termasuk identifikasi jenis data sensitif, pengelolaan data secara aman, dan implementasi langkah-langkah perlindungan data.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Prinsip Keamanan Informasi untuk Penggunaan Jaringan Internet</h2>
        <p class="text-gray-700 text-sm">
          Peserta akan memahami bagaimana melindungi informasi selama penggunaan jaringan internet, termasuk mengenali ancaman siber, menggunakan perangkat lunak keamanan, dan menjaga privasi saat online.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="450">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Prinsip Keamanan Informasi pada Transaksi Elektronika</h2>
        <p class="text-gray-700 text-sm">
          Pelatihan mencakup langkah-langkah keamanan pada transaksi elektronik, seperti enkripsi data, autentikasi pengguna, dan pengelolaan risiko transaksi daring. 
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="500">
        <h2 class="text-lg font-semibold text-gray-800">Melaksanakan Kebijakan Keamanan Informasi</h2>
        <p class="text-gray-700 text-sm">
          Peserta dilatih mengimplementasikan kebijakan keamanan informasi sesuai regulasi dan standar perusahaan, serta memahami prosedur perlindungan informasi. 
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="550">
        <h2 class="text-lg font-semibold text-gray-800">Mengaplikasikan Ketentuan/Persyaratan Keamanan Informasi</h2>
        <p class="text-gray-700 text-sm">
          Meliputi pemahaman standar keamanan seperti ISO 27001 dan memastikan proses operasional mematuhi persyaratan tersebut. :contentReference[oaicite:5]{index=5}
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="600">
        <h2 class="text-lg font-semibold text-gray-800">Mengelola Log</h2>
        <p class="text-gray-700 text-sm">
          Peserta mempelajari teknik pengelolaan log aktivitas, termasuk pencatatan, analisis, dan pemanfaatan untuk mendeteksi aktivitas mencurigakan dan mengurangi ancaman siber.
        </p>
      </div>
      <div data-aos="fade-up" data-aos-delay="650">
        <h2 class="text-lg font-semibold text-gray-800">Menerapkan Kontrol Akses berdasarkan Metodologi yang Diterapkan</h2>
        <p class="text-gray-700 text-sm">
          Peserta dilatih menerapkan kontrol akses efektif berdasarkan prinsip "least privilege" dan metode seperti RBAC (Role-Based Access Control). :contentReference
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