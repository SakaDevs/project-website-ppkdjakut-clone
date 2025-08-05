<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PPKD Jakut</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        /* Basic styling for the dropdown menu */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            min-width: 160px;
            z-index: 1000;
            border-radius: 0.375rem;
            overflow: hidden;
        }

        .dropdown-menu.active {
            display: block;
        }

        .dropdown-menu li {
            padding: 0;
            background: none;
            color: inherit;
            transition: none;
        }

        .dropdown-menu li a {
            padding: 0.75rem 1rem;
            display: block;
            white-space: nowrap;
            color: #333;
            transition: background-color 0.2s ease;
        }

        .dropdown-menu li a:hover {
            background-color: #f0f0f0;
            color: #000;
        }

        /* Hamburger menu styles */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            z-index: 1001;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: #333;
            margin: 3px 0;
            transition: 0.3s;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        /* Mobile menu styles */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            z-index: 1000;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .mobile-menu.active {
            display: flex;
            opacity: 1;
            visibility: visible;
        }

        .mobile-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .mobile-menu ul li {
            margin: 1rem 0;
        }

        .mobile-menu ul li a {
            font-size: 1.5rem;
            color: #333;
            text-decoration: none;
            padding: 1rem 0;
            display: block;
            transition: color 0.3s ease;
        }

        .mobile-menu ul li a:hover {
            color: #81beffff;
        }

        /* Mobile dropdown styles */
        .mobile-dropdown {
            position: relative;
        }

        .mobile-dropdown-menu {
            display: none;
            background-color: rgba(240, 240, 240, 0.9);
            border-radius: 0.5rem;
            margin-top: 0.5rem;
            padding: 0.5rem 0;
        }

        .mobile-dropdown-menu.active {
            display: block;
        }

        .mobile-dropdown-menu li a {
            font-size: 1.25rem;
            padding: 0.5rem 1rem;
            color: #555;
        }

        .mobile-dropdown-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .mobile-start-btn {
            background-color: #60a5fa;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            text-decoration: none;
            margin-top: 2rem;
            transition: background-color 0.3s ease;
        }

        .mobile-start-btn:hover {
            background-color: #81beffff;
        }

        #navbar {
            box-shadow: 0 2px 2px -2px rgba(0,0,0,.2);
            background-color: white;
        }

        /* Responsive breakpoints */
        @media (max-width: 1024px) {
            .desktop-nav {
                display: none;
            }
            
            .hamburger {
                display: flex;
            }
            
            .desktop-start-btn {
                display: none;
            }
        }

        @media (min-width: 1025px) {
            .mobile-menu {
                display: none !important;
            }
        }

        /* Animations */
        @-webkit-keyframes bounce {
            0% { transform: translateY(-5px) }
            50% { transform: translateY(10px) }
            100% { transform: translateY(-5px) }
        }

        @keyframes bounce {
            0% { transform: translateY(-5px) }
            50% { transform: translateY(10px) }
            100% { transform: translateY(-5px) }
        }

        #images {
            -webkit-animation: bounce 7s infinite ease-in-out;
            -o-animation: bounce 7s infinite ease-in-out;
            -ms-animation: bounce 7s infinite ease-in-out;
            -moz-animation: bounce 7s infinite ease-in-out;
            animation: bounce 7s infinite ease-in-out;
        }

        /* Logo responsive */
        .logo-container {
            flex-shrink: 0;
        }

        .logo-text {
            font-size: 1.5rem;
        }

        @media (max-width: 640px) {
            .logo-text {
                font-size: 1.25rem;
            }
            
            .navbar-container {
                margin: 1rem;
                padding: 0.5rem 1rem;
            }
        }
    </style>
</head>

<body x-data="{ isVideoModalOpen: false }" @keydown.escape.window="isVideoModalOpen: false">
    <!-- NAVBAR -->
    <?= $this->include('layout/navbar.php') ?>
    <!-- END NAVBAR -->

    <!-- HOME -->
    <div class="hero flex min-h-screen flex-col items-center justify-center px-4 text-center sm:mt-0">
        <img src="https://ppkdju.com/static/img/hero.jpg" alt="Hero Image" id="images" class="h-56 w-auto sm:h-96" data-aos="zoom-in" data-aos-duration="1000" />
        <h1 class="mt-8 text-3xl font-light sm:text-4xl mdx:text-cyan-400" data-aos="fade-up" data-aos-delay="200">Selamat datang <span class="text-cyan-600 font-light"><?= auth()->user()->username ?? auth()->user()->first_name ?? 'Jaknaker'?></span></h1>
        <h1 class="mt-4 text-lg font-light sm:text-xl" data-aos="fade-up" data-aos-delay="400">Tingkatkan kompetensi mu untuk raih karir yang kamu inginkan, <strong>GRATIS!</strong></h1>
        <div class="mt-8 flex w-full max-w-xs flex-col items-center gap-4 sm:w-auto sm:max-w-none sm:flex-row sm:gap-2" data-aos="fade-up" data-aos-delay="600">
            <a class="w-full rounded-md bg-blue-400 py-2 px-6 text-white transition hover:bg-[#81beffff] sm:w-auto" href="login">Mulai</a>
            <div class="playbutton w-full sm:w-auto">
                <a href="#" @click.prevent="isVideoModalOpen = true" class="flex w-full items-center justify-center gap-2 rounded-md py-2 px-6 text-blue-400 transition hover:text-[#81beffff] sm:w-auto">
                    <i class="bi bi-play-circle text-2xl"></i>
                    <span>Tonton Video</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END HOME -->

    <!-- SECTION 1 -->
    <div class="bg-gray-700 grid grid-cols-1 p-10 gap-8 sm:grid-cols-3 text-white justify-items-center transition delay-150 duration-300 ease-in-out">
        <div class="cursor-pointer max-w-sm p-6 rounded-lg flex flex-col items-center text-center transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl hover:bg-gray-600 group" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4 text-blue-400 transition-colors duration-300 group-hover:text-blue-300">
                <i class="bi bi-person-workspace text-5xl group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <a href="#" class="block text-xl font-semibold mb-2 text-white transition-colors duration-300 group-hover:text-[#81beff]">Pelatihan Berbasis Kompetensi</a>
            <p class="text-sm leading-relaxed text-gray-300 transition-colors duration-300 group-hover:text-white">Pelatihan kerja yang menitikberatkan pada penguasaan kemampuan kerja. Kemampuan kerja tersebut mencakup pengetahuan, keterampilan, dan sikap sesuai standar yang ditetapkan di tempat kerja.</p>
        </div>

        <div class="cursor-pointer max-w-sm p-6 rounded-lg flex flex-col items-center text-center transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl hover:bg-gray-600 group" data-aos="fade-up" data-aos-delay="200">
            <div class="mb-4 text-blue-400 transition-colors duration-300 group-hover:text-blue-300">
                <i class="bi bi-award text-5xl group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <a href="#" class="block text-xl font-semibold mb-2 text-white transition-colors duration-300 group-hover:text-[#81beff]">Sertifikasi</a>
            <p class="text-sm leading-relaxed text-gray-300 transition-colors duration-300 group-hover:text-white">Sertifikasi Badan Nasional Standardisasi Profesi (BNSP) melalui Uji Kompetensi yang dilaksanakan oleh Lembaga Sertifikasi Profesi di PPKD Jakarta Utara.</p>
        </div>

        <div class="cursor-pointer max-w-sm p-6 rounded-lg flex flex-col items-center text-center transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl hover:bg-gray-600 group" data-aos="fade-up" data-aos-delay="300">
            <div class="mb-4 text-blue-400 transition-colors duration-300 group-hover:text-blue-300">
                <i class="bi bi-briefcase text-5xl group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <a href="#" class="block text-xl font-semibold mb-2 text-white transition-colors duration-300 group-hover:text-[#81beff]">Pemasaran Kerja</a>
            <p class="text-sm leading-relaxed text-gray-300 transition-colors duration-300 group-hover:text-white">Proses pelaksanaan penempatan tenaga kerja dengan bekerja sama dengan berbagai industri untuk penyampaian informasi lowongan kerja.</p>
        </div>
    </div>
    <!-- SECTION END -->

    <div id="about" class="pt-20 mt-8 pb-10">
        <h1 class="text-4xl text-center font-light text-gray-800 mb-10" data-aos="fade-up">Tentang PPKD JAKUT</h1>
    </div>
    <div class="flex flex-col lg:flex-row justify-center items-start mx-auto px-4 md:px-8 lg:px-16 max-w-7xl gap-8 mb-20">
        <div class="w-full lg:w-1/2 flex justify-center lg:justify-end" data-aos="fade-right" data-aos-duration="1000">
            <img src="https://ppkdju.com/static/img/ppkd-potrait.jpg" alt="Gedung PPKD Jakut" class="w-full h-auto max-w-lg rounded-lg shadow-lg">
        </div>
        <div class="w-full lg:w-1/2" data-aos="fade-left" data-aos-duration="1000">
            <h1 class="text-3xl font-light text-gray-800 mb-4 max-w-full">
                Pusat Pelatihan Kerja Daerah Jakarta Utara, Dinas Tenaga Kerja Transmigrasi dan Energi Provinsi DKI Jakarta
            </h1>
            <div x-data="{ activeTab: 'profil' }" class="mt-4">
                <div class="flex border-b border-gray-300 mb-6">
                    <button @click="activeTab = 'profil'" :class="{ 'border-blue-500 text-blue-600 font-medium': activeTab === 'profil', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'profil' }" class="py-2 px-4 border-b-2 transition-colors duration-200 focus:outline-none">
                        Profil
                    </button>
                    <button @click="activeTab = 'visi'" :class="{ 'border-blue-500 text-blue-600 font-medium': activeTab === 'visi', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'visi' }" class="py-2 px-4 border-b-2 transition-colors duration-200 focus:outline-none">
                        Visi
                    </button>
                    <button @click="activeTab = 'misi'" :class="{ 'border-blue-500 text-blue-600 font-medium': activeTab === 'misi', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'misi' }" class="py-2 px-4 border-b-2 transition-colors duration-200 focus:outline-none">
                        Misi
                    </button>
                </div>
                <div class="tab-content text-gray-700 text-base leading-relaxed">
                    <div x-show="activeTab === 'profil'" x-transition:enter.duration.500ms>
                        <p class="mb-4">Pusat Pelatihan Kerja Daerah merupakan Unit Pelaksanan Teknis (UPT) Dinas Tenaga Kerja dan Transmigrasi Provinsi DKI Jakarta.</p>
                        <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800"><i class="bi bi-check-lg text-blue-500 mr-2"></i> Tugas dan Fungsi</h3>
                        <p class="mb-4">Berdasarkan Peraturan Gubernur Provinsi DKI Jakarta 57 Tahun 2022 tentang Organisasi dan Tata Kerja Pusat Pelatihan Kerja Daerah, PPKD Jakarta Utara mempunyai tugas utama melaksanakan pelatihan di berbagai kejuruan.</p>
                        <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800"><i class="bi bi-check-lg text-blue-500 mr-2"></i> Sejarah</h3>
                        <p class="mb-4">Pusat Pelatihan Kerja Daerah Jakarta Utara berdiri pada tahun 1989 dengan nama Balai Latihan Kerja Daerah (BLKD) Jakarta Utara, kemudian berganti nama menjadi Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Utara.</p>
                        <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800"><i class="bi bi-check-lg text-blue-500 mr-2"></i> Lokasi</h3>
                        <p class="mb-4">PPKD Jakarta Utara terletak di Jl. Gereja Tugu Semper No. 20 Kel. Semper Barat, Kec. Cilincing, Jakarta Utara.</p>
                    </div>
                    <div x-show="activeTab === 'visi'" x-transition:enter.duration.500ms>
                        <p class="mb-4">Visi PPKD Jakarta Utara</p>
                        <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800"><i class="bi bi-check-lg text-blue-500 mr-2"></i> Visi</h3>
                        <p class="mb-4">Menciptakan peserta pelatihan berkarakter kebangsaan dan siap berkompetisi di dunia kerja.</p>
                    </div>
                    <div x-show="activeTab === 'misi'" x-transition:enter.duration.500ms>
                        <p class="mb-4">Misi PPKD Jakarta Utara</p>
                        <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800"><i class="bi bi-check-lg text-blue-500 mr-2"></i> Misi</h3>
                        <p class="mb-4">Memberikan pelayanan pelatihan dan keterampilan bagi masyarakat.<br>Meningkatkan kompetensi dengan melaksanakan Uji Kompetensi.<br>Memasarkan calon tenaga kerja di sektor industri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="layanan" class="pt-20 mt-8 pb-10">
    <section class="bg-slate-800 py-16 sm:py-20" >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl" >Layanan</h2>
                <p class="mt-2 text-lg leading-8 text-slate-400">Pelatihan yang disediakan PPKD Jakarta Utara</p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article class="group relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://ppkdju.com/static/img/regular/800x600/grafis.jpg" alt="Suasana pelatihan reguler di dalam ruangan komputer." class="absolute inset-0 -z-10 h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/60"></div>
                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <div class="flex items-center gap-x-4">
                            <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-cyan-500">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" /></svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white transition-colors duration-300 group-hover:text-cyan-400">
                                <a href="#"><span class="absolute inset-0"></span>Pelatihan Reguler</a>
                            </h3>
                        </div>
                        <p class="mt-4 text-slate-300">Pelatihan Kerja berbasis Kompetensi yang dilaksanakan di PPKD Jakarta Utara (In-House Training).</p>
                    </div>
                </article>
                <article class="group relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://ppkdju.com/static/img/mtu/800x600/motor.jpg" alt="Pelatihan teknis otomotif di luar ruangan." class="absolute inset-0 -z-10 h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/60"></div>
                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300" >
                        <div class="flex items-center gap-x-4">
                            <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-indigo-500">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125-1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125-1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125-1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5zM13.5 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125-1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5z" /></svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white transition-colors duration-300 group-hover:text-indigo-400">
                                <a href="#"><span class="absolute inset-0"></span>Pelatihan Mobile Training Unit</a>
                            </h3>
                        </div>
                        <p class="mt-4 text-slate-300">Pelatihan Kerja yang dilaksanakan di tempat pemohon, seperti di Aula RW, Karangtaruna, Kantor PKK, dll.</p>
                    </div>
                </article>
                <article class="group relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://ppkdju.com/static/img/kolaborasiptpl.jpg" alt="Sekelompok orang dalam sebuah seminar atau kolaborasi." class="absolute inset-0 -z-10 h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/60"></div>
                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <div class="flex items-center gap-x-4">
                            <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-emerald-500">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m-7.5-2.962a3.75 3.75 0 015.962 0L14.25 18l-2.962 2.962a3.75 3.75 0 01-5.962 0L4.5 18l2.25-2.25" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" /></svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white transition-colors duration-300 group-hover:text-emerald-400">
                                <a href="#"><span class="absolute inset-0"></span>Pelatihan Kolaborasi</a>
                            </h3>
                        </div>
                        <p class="mt-4 text-slate-300">Pelatihan Kerja yang dilaksanakan berdasarkan Nota Kesepahaman Bersama Perusahaan/Kolaborator.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    </div>

    
    <section x-data="{ activeStep: 0 }" class="pt-20 pb-10 bg-white">
        <h1 class="text-4xl text-center font-light text-gray-800 mb-10" data-aos="fade-up">
            Alur Pelatihan Reguler
        </h1>

        <div class="grid grid-cols-2 text-xl sm:grid-cols-3 lg:grid-cols-6 gap-4 px-4 md:px-8 max-w-7xl mx-auto mb-12 text-center">
            <template x-for="(step, index) in [
                { label: 'Pendaftaran Pelatihan', icon: '📝' },
                { label: 'Pemanggilan Seleksi', icon: '📞' },
                { label: 'Seleksi', icon: '🧪' },
                { label: 'Pengumuman', icon: '📢' },
                { label: 'Proses Pelatihan', icon: '🏫' },
                { label: 'Uji Kompetensi', icon: '🎓' }
            ]" :key="index">
                <div 
                    @click="activeStep = index"
                    :class="{
                        'bg-cyan-600 text-white shadow-lg': activeStep === index,
                        'bg-white text-gray-600': activeStep !== index
                    }"
                    class="cursor-pointer rounded-lg border border-gray-200 p-4 transition duration-200 ease-in-out hover:shadow-md"
                    data-aos="fade-up"
                    :data-aos-delay="index * 100"
                >
                    <div class="text-2xl mb-2" x-text="step.icon"></div>
                    <div class="text-sm font-medium" x-text="step.label"></div>
                </div>
            </template>
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 min-h-[400px]" data-aos="fade-up" data-aos-delay="300">
            <div class="space-y-4 text-gray-800 leading-relaxed px-4">
                <div x-show="activeStep === 0" x-transition>
                    <h2 class="text-2xl font-semibold">Pendaftaran Pelatihan</h2>
                    <p>Pendaftaran dapat dilaksanakan secara <strong>online</strong> melalui website atau datang langsung ke PPKD Jakarta Utara. Persyaratannya antara lain:</p>
                    <ul class="">
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Warga DKI Jakarta (Scan KTP / Surat Domisili)</li>
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Usia minimal 17 tahun</li>
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Scan Kartu Keluarga</li>
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Scan Ijazah terakhir</li>
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Scan pas foto 3x4 background merah</li>
                    </ul>
                    <p class="mt-2"><strong>Peserta akan menerima pesan WhatsApp</strong> untuk proses seleksi selanjutnya.</p>
                </div>
                <div x-show="activeStep === 1" x-transition>
                    <h2 class="text-2xl font-semibold">Pemanggilan Seleksi</h2>
                    <p>Calon peserta pelatihan yang sudah mendaftar akan dipanggil untuk melaksanakan seleksi melalui Whatsapp, info pemanggilan seleksi berupa</p>
                     <ul class="">
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Warga DKI Jakarta (Scan KTP / Surat Domisili)</li>
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Usia minimal 17 tahun</li>
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Scan Kartu Keluarga</li>
                    </ul>
                    <p class="mt-2">Calon peserta diminta untuk konfirmasi kehadiran seleksi melalui pesan Whatsapp yang ada.</p> 
                </div>
                <div x-show="activeStep === 2" x-transition>
                    <h2 class="text-2xl font-semibold">Seleksi</h2>
                    <p>Seleksi masing-masing program pelatihan terbagi menjadi 2 tahap :</p>
                    <ul class="">
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Seleksi Tertulis </li>
                        <li><i class="bi bi-check-square-fill text-cyan-500 h-5"></i> Seleksi Wawancara</li>
                    </ul>
                    <p class="mt-2">Peserta pelatihan diminta membawa smartphone untuk pelaksanaan seleksi tertulis.</p> 
                    <p class="mt-2">Setelah seleksi tertulis, dilanjutkan seleksi wawancara oleh instruktur pengampu program pelatihan.</p> 
                </div>
                <div x-show="activeStep === 3" x-transition>
                    <h2 class="text-2xl font-semibold">Pengumuman</h2>
                    <p>Hasil seleksi diumumkan melalui website dan WhatsApp. Peserta yang lolos akan lanjut ke pelatihan.</p>
                </div>
                <div x-show="activeStep === 4" x-transition>
                    <h2 class="text-2xl font-semibold">Proses Pelatihan</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Instruktur bersertifikat</li>
                        <li>Materi softskill & hard skill</li>
                        <li>Kunjungan industri</li>
                        <li>Snack & makan siang</li>
                    </ul>
                </div>
                <div x-show="activeStep === 5" x-transition>
                    <h2 class="text-2xl font-semibold">Uji Kompetensi</h2>
                    <p>Peserta mengikuti uji kompetensi bersertifikat setelah pelatihan selesai.</p>
                </div>
            </div>

            <div class="w-full flex items-center justify-center px-4">
                <template x-if="activeStep === 0"><img src="https://ppkdju.com/static/img/features-1.jpg" alt="Pendaftaran" class="w-full h-auto max-w-md mx-auto rounded-lg shadow-md" /></template>
                <template x-if="activeStep === 1"><img src="https://ppkdju.com/static/img/features-2.jpg" alt="Pemanggilan" class="w-full h-auto max-w-md mx-auto rounded-lg shadow-md" /></template>
                <template x-if="activeStep === 2"><img src="https://ppkdju.com/static/img/features-2.svg" alt="Seleksi" class="w-full h-auto max-w-md mx-auto" /></template>
                <template x-if="activeStep === 3"><img src="https://ppkdju.com/static/img/features-4.svg" alt="Pengumuman" class="w-full h-auto max-w-md mx-auto" /></template>
                <template x-if="activeStep === 4"><img src="https://ppkdju.com/static/img/features-5.svg" alt="Pelatihan" class="w-full h-auto max-w-md mx-auto" /></template>
                <template x-if="activeStep === 5"><img src="https://ppkdju.com/static/img/ujk.png" alt="Uji Kompetensi" class="w-full h-auto max-w-md mx-auto rounded-lg shadow-md" /></template>
            </div>
       </div>
    </section>


    <div x-data="{ tab: 'unduh' }" class="bg-gray-700 text-white p-8 max-h-auto" data-aos="fade-up">
        <h2 class="text-3xl tracking-tight text-white sm:text-5xl text-center m-20 font-light" >Alur Pelatihan MTU</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 justify-center mb-8 max-w-6xl mx-auto">
            <div @click="tab = 'unduh'" :class="tab === 'unduh' ? 'bg-cyan-500' : 'bg-gray-600'" class="p-5 rounded shadow cursor-pointer transition" data-aos="fade-up" data-aos-delay="100">
                <div class="text-2xl text-center">🔍</div>
                <div class="font-semibold text-base text-center">Unduh Format Surat Permohonan</div>
            </div>
            <div @click="tab = 'pengajuan'" :class="tab === 'pengajuan' ? 'bg-purple-600' : 'bg-gray-600'" class="p-5 rounded shadow cursor-pointer transition" data-aos="fade-up" data-aos-delay="200">
                <div class="text-2xl text-center">📦</div>
                <div class="font-semibold text-base text-center">Pengajuan Permohonan</div>
            </div>
            <div @click="tab = 'survey'" :class="tab === 'survey' ? 'bg-green-600' : 'bg-gray-600'" class="p-5 rounded shadow cursor-pointer text-center transition" data-aos="fade-up" data-aos-delay="300">
                <div class="text-2xl">🌍</div>
                <div class="font-semibold">Survey Lokasi</div>
            </div>
            <div @click="tab = 'pelatihan'" :class="tab === 'pelatihan' ? 'bg-blue-600' : 'bg-gray-600'" class="p-5 rounded shadow cursor-pointer text-center transition" data-aos="fade-up" data-aos-delay="400">
                <div class="text-2xl text-center">📋</div>
                <div class="font-semibold">Proses Pelatihan</div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 items-center max-w-6xl mx-auto max-h-auto px-4" data-aos="fade-up" data-aos-delay="500">
            <div>
                <template x-if="tab === 'unduh'"><div x-transition>
                    <h3 class="text-xl font-bold mb-2">Unduh Contoh Surat Permohonan Pelatihan MTU</h3>
                    <p class="mb-4">Pelatihan MTU merupakan pelatihan yang dilaksanakan di tempat pemohon seperti LMK, Balai RT/RW. Ajukan surat permohonan kolektif minimal 10 peserta.</p>
                    <a href="#" class="bg-cyan-500 text-white px-4 py-2 rounded">Unduh Surat Permohonan</a>
                </div></template>
                <template x-if="tab === 'pengajuan'"><div x-transition>
                    <h3 class="text-xl font-bold mb-2">Pengajuan Permohonan</h3>
                    <p>Pemohon pelatihan dapat mengunggah berkas permohonan pelatihan MTU yang sudah dibuat ke laman website PPKDJU dan mengisi data.</p>
                </div></template>
                <template x-if="tab === 'survey'"><div x-transition>
                    <h3 class="text-xl font-bold mb-2">Survey Lokasi</h3>
                    <p>Survey lokasi dilaksanakan oleh tim PPKD Jakarta Utara untuk memastikan kelayakan lokasi pelatihan MTU dengan mempertimbangkan berbagai aspek teknis dan keamanan.</p>
                </div></template>
                <template x-if="tab === 'pelatihan'"><div x-transition>
                    <h3 class="text-xl font-bold mb-2">Proses Pelatihan</h3>
                    <p>Setelah proses survey dan dinyatakan layak, pelatihan akan dilaksanakan pada lokasi tersebut diampu oleh instruktur profesional Selama 160, 180, 240 atau 260 Jam Pelatihan (JPL) sesuai dengan program pelatihan yang diikuti secara gratis dan mendapat benefit.</p>
                </div></template>
            </div>

            <div class="flex items-center justify-center">
                <img x-show="tab === 'unduh'" src="https://ppkdju.com/static/img/features-1.jpg" alt="Unduh" class="w-full h-auto max-w-md mx-auto rounded-lg shadow-md" x-transition />
                <img x-show="tab === 'pengajuan'" src="https://ppkdju.com/static/img/features-2.jpg" alt="Pengajuan" class="w-full h-auto max-w-md mx-auto rounded-lg shadow-md" x-transition />
                <img x-show="tab === 'survey'" src="https://ppkdju.com/static/img/features-2.svg" alt="Survey" class="w-full h-auto max-w-md mx-auto" x-transition />
                <img x-show="tab === 'pelatihan'" src="https://ppkdju.com/static/img/features-5.svg" alt="Pelatihan" class="w-full h-auto max-w-md mx-auto" x-transition />
            </div>
        </div>
    </div>
        

    <div class="text-center items-center my-10 pt-10 px-4" data-aos="fade-up">
        <h1 class="text-5xl mb-4 font-light">ALAMAT</h1>
        <h3>Jalan Gereja Tugu No 20 Semper Barat, Kecamatan Cilincing, Kota Administrasi Jakarta Utara, DKI Jakarta 14130</h3>
    </div>
    <div data-aos="fade-up" class="">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3967.028619839566!2d106.918383!3d-6.126851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a200f48b528b1%3A0x76f0b97c23e8b33d!2sPPKD%20Jakarta%20Utara!5e0!3m2!1sen!2sid!4v1753321114245!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div data-aos="fade-up">
        <?php include('layout/footer.php'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        AOS.init({
            offset: 120,
            delay: 0,
            duration: 800, // A slightly faster duration can feel smoother
            easing: 'ease',
            once: true, // Animate elements only once for a smoother experience
            mirror: false,
            anchorPlacement: 'top-bottom',
        });

        
    </script>
    <div 
        x-show="isVideoModalOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
        @click.self="isVideoModalOpen = false"
        style="display: none;"
    >
        <div class="relative w-full max-w-4xl p-4">
            <button @click="isVideoModalOpen = false" class="absolute -top-2 -right-2 z-10 flex h-10 w-10 items-center justify-center rounded-full cursor-pointer bg-white text-black text-2xl">&times;</button>
            
            <div class="relative overflow-hidden rounded-lg shadow-xl" style="padding-top: 56.25%;"> <iframe 
                    class="absolute top-0 left-0 h-full w-full" 
                    src="https://www.youtube.com/embed/CR6jfKSeXT4?si=0kJC1VjUQROxAAte" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</body>
</html>