<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIMPLAST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

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

        </div>
        

        <div class="form-container">

            <!-- FORM -->
            <form action="{{route('login')}}" method="POST">
                @csrf

                <label>
                    No Telephone <span>*</span>
                </label>

                <input
                    type="text"
                    name="no_tlp"
                    placeholder="Masukkan username"
                    required
                >

                <label>
                    Password <span>*</span>
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

                <button type="submit">
                    Log in
                </button>

            </form>
        </div>

        
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