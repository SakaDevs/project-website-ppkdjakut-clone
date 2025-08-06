<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - PPKD Jakut</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc; /* Tailwind gray-50 */
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Navbar include -->
    <?= view('layout/navbar.php'); ?>

    <main class="container mx-auto px-4 py-12 lg:py-16 mt-20">
        <div class="max-w-4xl mx-auto" data-aos="fade-up">
            
            <!-- Profile Header Card -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden mb-8">
                <!-- Cover Photo -->
                <div class="h-40 bg-gradient-to-r from-cyan-500 to-blue-500"></div>

                <!-- Profile Details -->
                <div class="p-6">
                    <div class="flex flex-col sm:flex-row items-center sm:items-end sm:space-x-5">
                        <!-- Profile Avatar -->
                        <div class="relative -mt-20 mb-4 sm:mb-0">
                            <img class="w-32 h-32 rounded-full border-4 border-white shadow-lg object-cover" 
                                 src="<?= base_url('uploads/foto_profile/' . ($detail->user_image ?? 'default.png')) ?>" 
                                 alt="Profile Picture"
                                 onerror="this.onerror=null;this.src='https://placehold.co/128x128/e2e8f0/64748b?text=User';">
                        </div>
                        
                        <!-- User Name and Email -->
                        <div class="text-center sm:text-left">
                            <h1 class="text-2xl font-bold text-gray-800">
                                <?= htmlspecialchars(auth()->user()->first_name ?? auth()->user()->username) ?>
                            </h1>
                            <p class="text-gray-500"><?= htmlspecialchars($detail->email ?? 'email@example.com') ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personal Information Card -->
            <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-md border border-gray-200" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Informasi Personal</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Full Name</label>
                        <p class="text-lg text-gray-800 font-semibold"><?= htmlspecialchars($detail->full_name ?? 'Not Set') ?></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Username</label>
                        <p class="text-lg text-gray-800 font-semibold"><?= htmlspecialchars(auth()->user()->username) ?></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Email Address</label>
                        <p class="text-lg text-gray-800 font-semibold"><?= htmlspecialchars($detail->email ?? 'Not Set') ?></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Phone Number</label>
                        <p class="text-lg text-gray-800 font-semibold"><?= htmlspecialchars($detail->phone_number ?? 'Not Set') ?></p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="border-t border-gray-200 mt-8 pt-6 flex flex-col sm:flex-row items-center justify-end gap-4">
                    <a href="<?= base_url('users_profile/edit/' . $detail->id) ?>" class="w-full sm:w-auto flex justify-center items-center px-5 py-2.5 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-sm transition-transform hover:scale-105">
                        <i class="bi bi-pencil-square mr-2"></i>
                        Edit Profile
                    </a>
                    <form action="/logout" method="get" class="w-full sm:w-auto">
                        <?= csrf_field() ?>
                        <button type="submit" class="w-full flex justify-center items-center px-5 py-2.5 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg shadow-sm transition-transform hover:scale-105">
                            <i class="bi bi-box-arrow-right mr-2"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Include Footer -->
    <?= view('layout/footer.php'); ?>

    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                offset: 100,
                duration: 600,
                easing: 'ease-in-out',
                once: true,
            });
        });
    </script>
</body>
</html>
