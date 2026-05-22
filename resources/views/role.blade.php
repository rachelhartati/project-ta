<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIMPLAST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/role.css') }}">

    <!-- LUCIDE ICON -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

    <!-- LEFT -->
    <div class="left">

        <!-- CONTENT -->
        <div class="left-content">

            <h1>Selamat Datang</h1>

            <div class="line"></div>

            <p>
                Sistem Informasi Manajemen <br>
                Material Plastik
            </p>

        </div>

        <!-- BACKGROUND -->
        <div class="circle c1"></div>
        <div class="circle c2"></div>
        <div class="circle c3"></div>

        <!-- CHECK -->
        <div class="check-wrapper">
            <div class="check-inner">
                <i data-lucide="check"></i>
            </div>
        </div>

    </div>

    <!-- RIGHT -->
    <div class="right">

        <!-- HEADER -->
        <div class="header-center">

            <div class="logo">
                SIMPL<span>A</span>ST
            </div>

            <div class="subtitle">
                Silahkan pilih peran Anda untuk melanjutkan
            </div>

        </div>

        <!-- ANGGOTA -->
        <a href="{{ route('login', 'anggota') }}" class="card">

            <div class="icon-box green">
                <i data-lucide="user"></i>
            </div>

            <div>
                <div class="card-title">Anggota</div>

                <div class="card-desc">
                    Akses informasi setoran dan penggajian pribadi Anda
                </div>
            </div>

        </a>

        <!-- AGEN -->
        <a href="{{ route('login', 'agen') }}" class="card">

            <div class="icon-box orange">
                <i data-lucide="package"></i>
            </div>

            <div>
                <div class="card-title">Agen</div>

                <div class="card-desc">
                    Kelola setoran anggota dan pengambilan material
                </div>
            </div>

        </a>

        <!-- ADMIN -->
        <a href="{{ route('login', 'admin') }}" class="card">

            <div class="icon-box blue">
                <i data-lucide="shield-check"></i>
            </div>

            <div>
                <div class="card-title">Admin</div>

                <div class="card-desc">
                    Kelola data, validasi transaksi, dan laporan sistem
                </div>
            </div>

        </a>

        <!-- FOOTER -->
        <div class="footer-note">

            <i data-lucide="lock"></i>

            <span>
                Sistem ini aman dan hanya dapat diakses oleh pengguna yang memiliki izin
            </span>

        </div>

    </div>

    <!-- ICON INIT -->
    <script>
        lucide.createIcons();
    </script>

</body>
</html>