<?php helper('auth'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PPKD Jakut</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <!-- NAVBAR -->
    <header x-data="{ 
    isMobileMenuOpen: false, 
    isPelatihanDropdownOpen: false, 
    isPendaftaranDropdownOpen: false 
}" @keydown.escape.window="isMobileMenuOpen = false; isPelatihanDropdownOpen = false; isPendaftaranDropdownOpen = false" class="fixed top-0 left-0 w-full z-50" id="navbar">
        <div class="flex justify-between items-center m-6 px-1 md:px-6 navbar-container">
            <!-- Logo -->
            <a href="<?= base_url('/')?>" class="flex gap-3 items-center logo-container">
                <img src="https://ppkdju.com/static/img/logo.png" alt="" class="h-10" >
                <h1 class="logo-text font-extralight">PPKD Jakut</h1>
            </a>
            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <ul class="flex gap-8 font-light text-center">
                    <li class="navbarid"><a href="<?= base_url('/')?>">Home</a></li>
                    <li class="navbarid"><a href="<?= base_url('/#about') ?>">Tentang</a></li>
                    <li class="navbarid"><a href="<?= base_url('/#layanan') ?>">Layanan</a></li>
                    <li class="navbarid"><a href="/lowongan/">Lowongan</a></li>
                    <li class="navbarid"><a href="/jadwal/">Jadwal</a></li>
                    
                    <li class="relative">
                        <a href="#" class="dropdown-toggle" id="pelatihanDropdownToggle">
                            <span>Pelatihan</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul class="dropdown-menu text-left">
                            <li class=""><a href="/pelatihan/regular">Regular</a></li>
                            <li><a href="/pelatihan/MTU">Mobile Training Unit</a></li>
                        </ul>
                    </li>
                    
                    <li class="relative">
                        <a href="#" class="dropdown-toggle" id="pendaftaranDropdownToggle">
                            <span>Pendaftaran</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul class="dropdown-menu text-left">
                            <li><a href="/pelatihan/regular/daftar/">Regular</a></li>
                            <li><a href="/pelatihan/MTU/daftar/">Mobile Training Unit</a></li>
                            <li><a href="#">Kolaborasi Pelatihan</a></li>
                        </ul>
                    </li>
                    <?php if(auth()->loggedIn() && auth()->user()->inGroup('admin')):?>
                    <li class="navbarid">
                        <a href="<?= base_url('users')?>">Users</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
                
            <?php if (auth()->loggedIn()): ?>
                <a class="bg-blue-500 py-2 px-6 rounded-md text-white hover:bg-blue-600 transition desktop-start-btn"
                href="<?= site_url('users_profile/' . auth()->user()->id) ?>">
                    My Profile
                </a>
            <?php else: ?>
                <a class="bg-blue-400 py-2 px-6 rounded-md text-white hover:bg-blue-500 transition desktop-start-btn"
                href="<?= url_to('login') ?>">
                    Login
                </a>
            <?php endif; ?>



            <!-- Hamburger Menu -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="/#services">Layanan</a></li>
                <li><a href="/lowongan/">Lowongan</a></li>
                <li><a href="/jadwal/">Jadwal</a></li>
                
                <li class="mobile-dropdown">
                    <a href="#" class="mobile-dropdown-toggle" id="mobilePelatihanToggle">
                        <span>Pelatihan</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="mobile-dropdown-menu" id="mobilePelatihanMenu">
                        <li><a href="/regular">Regular</a></li>
                        <li><a href="/mtu">Mobile Training Unit</a></li>
                    </ul>
                </li>
                
                <li class="mobile-dropdown">
                    <a href="#" class="mobile-dropdown-toggle" id="mobilePendaftaranToggle">
                        <span>Pendaftaran</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="mobile-dropdown-menu" id="mobilePendaftaranMenu">
                        <li><a href="/pendaftaran">Regular</a></li>
                        <li><a href="/pendaftaran-mtu">Mobile Training Unit</a></li>
                        <li><a href="#">Kolaborasi Pelatihan</a></li>
                    </ul>
                </li>
                <li><a href="">Users</a></li>
            </ul>
            
            <a href="/#services" class="mobile-start-btn">Mulai</a>
        </div>
    </header>
    <!-- END NAVBAR -->



    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Desktop dropdown functionality
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(event) {
                    event.preventDefault();
                    const parentLi = this.closest('li.relative');
                    const dropdownMenu = parentLi.querySelector('.dropdown-menu');

                    dropdownMenu.classList.toggle('active');

                    dropdownToggles.forEach(otherToggle => {
                        const otherParentLi = otherToggle.closest('li.relative');
                        const otherDropdownMenu = otherParentLi.querySelector('.dropdown-menu');
                        if (otherDropdownMenu !== dropdownMenu && otherDropdownMenu.classList.contains('active')) {
                            otherDropdownMenu.classList.remove('active');
                        }
                    });
                });
            });

            // Close desktop dropdowns when clicking outside
            document.addEventListener('click', function(event) {
                dropdownToggles.forEach(toggle => {
                    const parentLi = toggle.closest('li.relative');
                    if (!parentLi.contains(event.target)) {
                        const dropdownMenu = parentLi.querySelector('.dropdown-menu');
                        if (dropdownMenu.classList.contains('active')) {
                            dropdownMenu.classList.remove('active');
                        }
                    }
                });
            });

            // Mobile menu functionality
            const hamburger = document.getElementById('hamburger');
            const mobileMenu = document.getElementById('mobileMenu');

            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                mobileMenu.classList.toggle('active');
                document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : 'auto';
            });

            // Mobile dropdown functionality
            const mobilePelatihanToggle = document.getElementById('mobilePelatihanToggle');
            const mobilePelatihanMenu = document.getElementById('mobilePelatihanMenu');
            const mobilePendaftaranToggle = document.getElementById('mobilePendaftaranToggle');
            const mobilePendaftaranMenu = document.getElementById('mobilePendaftaranMenu');

            mobilePelatihanToggle.addEventListener('click', function(event) {
                event.preventDefault();
                mobilePelatihanMenu.classList.toggle('active');
                const icon = this.querySelector('i');
                icon.classList.toggle('bi-chevron-down');
                icon.classList.toggle('bi-chevron-up');
            });

            mobilePendaftaranToggle.addEventListener('click', function(event) {
                event.preventDefault();
                mobilePendaftaranMenu.classList.toggle('active');
                const icon = this.querySelector('i');
                icon.classList.toggle('bi-chevron-down');
                icon.classList.toggle('bi-chevron-up');
            });

            // Close mobile menu when clicking on links
            const mobileLinks = document.querySelectorAll('.mobile-menu a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Only close if it's not a dropdown toggle
                    if (!this.classList.contains('mobile-dropdown-toggle')) {
                        hamburger.classList.remove('active');
                        mobileMenu.classList.remove('active');
                        document.body.style.overflow = 'auto';
                    }
                });
            });

            // Close mobile menu when resizing to desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth > 1024) {
                    hamburger.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
        });
    </script>
</body>
</html>