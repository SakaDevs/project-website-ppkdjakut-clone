<?php

namespace Myth\Auth\Language\id;

return [
    // Exceptions
    'invalidModel'        => 'Model {0} harus dimuat sebelum digunakan.',
    'userNotFound'        => 'Pengguna dengan ID = {0, number} tidak ditemukan.',
    'noUserEntity'        => 'Entitas Pengguna harus disediakan untuk validasi kata sandi.',
    'tooManyCredentials'  => 'Hanya dapat memvalidasi dengan 1 kredensial selain kata sandi.',
    'invalidFields'       => 'Kolom "{0}" tidak dapat digunakan untuk validasi kredensial.',
    'unsetPasswordLength' => 'Anda harus mengatur `minimumPasswordLength` pada file konfigurasi Auth.',
    'unknownError'        => 'Maaf, terjadi masalah saat mengirim email. Silakan coba lagi nanti.',
    'notLoggedIn'         => 'Anda harus masuk untuk mengakses halaman tersebut.',
    'notEnoughPrivilege'  => 'Anda tidak memiliki izin yang cukup untuk mengakses halaman ini.',

    // Registration
    'registerDisabled' => 'Maaf, pendaftaran pengguna baru tidak diperbolehkan saat ini.',
    'registerSuccess'  => 'Selamat bergabung! Silakan masuk.',
    'registerCLI'      => 'Pengguna baru berhasil dibuat: {0}, #{1}',

    // Activation
    'activationNoUser'       => 'Pengguna dengan kode aktivasi tersebut tidak ditemukan.',
    'activationSubject'      => 'Aktivasi Akun Anda',
    'activationSuccess'      => 'Silakan konfirmasi akun Anda dengan mengklik tautan aktivasi pada email yang telah kami kirimkan.',
    'activationResend'       => 'Kirim ulang pesan aktivasi sekali lagi.',
    'notActivated'           => 'Akun ini belum diaktifkan.',
    'errorSendingActivation' => 'Gagal mengirim pesan aktivasi ke: {0}',

    // Login
    'badAttempt'      => 'Gagal masuk. Silakan periksa kembali Email dan Password Anda.',
    'loginSuccess'    => 'Selamat datang kembali!',
    'invalidPassword' => 'Gagal masuk. Silakan periksa kembali kata sandi Anda.',

    // Forgotten Passwords
    'forgotDisabled'  => 'Opsi reset kata sandi sedang dinonaktifkan.',
    'forgotNoUser'    => 'Pengguna dengan email tersebut tidak ditemukan.',
    'forgotSubject'   => 'Instruksi Reset Kata Sandi',
    'resetSuccess'    => 'Kata sandi Anda berhasil diubah. Silakan masuk dengan kata sandi baru.',
    'forgotEmailSent' => 'Token keamanan telah dikirim ke email Anda. Masukkan token tersebut di bawah untuk melanjutkan.',
    'errorEmailSent'  => 'Gagal mengirim email dengan instruksi reset kata sandi ke: {0}',
    'errorResetting'  => 'Gagal mengirim instruksi reset ke {0}',

    // Passwords
    'errorPasswordLength'         => 'Kata sandi harus terdiri dari minimal {0, number} karakter.',
    'suggestPasswordLength'       => 'Gunakan frasa sandi hingga 255 karakter untuk keamanan yang lebih baik.',
    'errorPasswordCommon'         => 'Kata sandi tidak boleh menggunakan kata sandi umum.',
    'suggestPasswordCommon'       => 'Kata sandi ini termasuk dalam daftar kata sandi umum atau telah bocor dari peretasan.',
    'errorPasswordPersonal'       => 'Kata sandi tidak boleh mengandung informasi pribadi yang mudah ditebak.',
    'suggestPasswordPersonal'     => 'Hindari menggunakan variasi dari alamat email atau nama pengguna Anda.',
    'errorPasswordTooSimilar'     => 'Kata sandi terlalu mirip dengan nama pengguna.',
    'suggestPasswordTooSimilar'   => 'Jangan gunakan bagian dari nama pengguna dalam kata sandi.',
    'errorPasswordPwned'          => 'Kata sandi {0} telah terungkap dalam kebocoran data sebanyak {1, number} kali pada {2} basis data yang terdampak.',
    'suggestPasswordPwned'        => '{0} sebaiknya tidak digunakan sebagai kata sandi. Jika Anda menggunakannya, segera ganti.',
    'errorPasswordPwnedDatabase'  => 'satu basis data',
    'errorPasswordPwnedDatabases' => 'beberapa basis data',
    'errorPasswordEmpty'          => 'Kata sandi wajib diisi.',
    'passwordChangeSuccess'       => 'Kata sandi berhasil diubah.',
    'userDoesNotExist'            => 'Kata sandi tidak diubah. Pengguna tidak ditemukan.',
    'resetTokenExpired'           => 'Maaf, token reset Anda telah kedaluwarsa.',

    // Groups
    'groupNotFound' => 'Grup dengan nama {0} tidak ditemukan.',

    // Permissions
    'permissionNotFound' => 'Izin dengan nama {0} tidak ditemukan.',

    // Banned
    'userIsBanned' => 'Akun ini telah diblokir. Silakan hubungi administrator.',

    // Too many requests
    'tooManyRequests' => 'Terlalu banyak permintaan. Silakan tunggu {0, number} detik.',

    // Login views
    'home'                      => 'Beranda',
    'current'                   => 'Saat Ini',
    'forgotPassword'            => 'Lupa Kata Sandi?',
    'enterEmailForInstructions' => 'Tidak masalah! Masukkan email Anda di bawah ini, kami akan mengirimkan instruksi untuk mereset kata sandi.',
    'email'                     => 'Email',
    'emailAddress'              => 'Alamat Email',
    'sendInstructions'          => 'Kirim Instruksi',
    'loginTitle'                => 'Masuk',
    'loginAction'               => 'Masuk',
    'rememberMe'                => 'Ingat saya',
    'needAnAccount'             => 'Belum punya akun?',
    'forgotYourPassword'        => 'Lupa kata sandi Anda?',
    'password'                  => 'Kata Sandi',
    'repeatPassword'            => 'Ulangi Kata Sandi',
    'emailOrUsername'           => 'Email atau Nama Pengguna',
    'username'                  => 'Nama Pengguna',
    'register'                  => 'Daftar',
    'signIn'                    => 'Masuk',
    'alreadyRegistered'         => 'Sudah punya akun?',
    'weNeverShare'              => 'Kami tidak akan membagikan email Anda kepada siapa pun.',
    'resetYourPassword'         => 'Atur Ulang Kata Sandi Anda',
    'enterCodeEmailPassword'    => 'Masukkan kode yang Anda terima melalui email, alamat email Anda, serta kata sandi baru.',
    'token'                     => 'Token',
    'newPassword'               => 'Kata Sandi Baru',
    'newPasswordRepeat'         => 'Ulangi Kata Sandi Baru',
    'resetPassword'             => 'Atur Ulang Kata Sandi',
];
