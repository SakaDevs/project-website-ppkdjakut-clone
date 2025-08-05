<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - PPKD Jakut</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/welcome.css">
    <style>
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            border: 1px solid #d1d5db;
            font-size: 1rem;
            color: #374151;
            background-color: #ffffff;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .form-input:focus {
            border-color: #60a5fa;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(96, 165, 250, 0.25);
        }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-50 min-h-screen flex flex-col justify-center items-center">
    <div class="w-full max-w-md mx-auto p-8 bg-white rounded-lg shadow-xl my-auto" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-light text-center text-gray-800 mb-6">
            Whoops! We seem to have hit a snag.
        </h2>
        <p class="text-center text-gray-600 mb-6">
            Sorry, something went wrong. Please try again later.
        </p>
        <div class="text-center">
            <a href="<?= base_url('/') ?>" 
               class="inline-block bg-blue-400 text-white py-3 px-6 rounded-md hover:bg-blue-500 transition focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 font-semibold text-lg">
                <i class="bi bi-house-door"></i> Back to Home
            </a>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            delay: 0,
            duration: 400,
            easing: 'ease',
            once: false,
            mirror: false,
            anchorPlacement: 'top-bottom',
        });
    </script>
</body>
</html>
