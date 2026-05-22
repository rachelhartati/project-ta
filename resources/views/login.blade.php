<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login SIMPLAST</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- LUCIDE ICON -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<div class="container">

    <!-- LEFT -->
    <div class="left">

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

        <div class="form-container">

            <!-- LOGO -->
            <h2 class="logo">
                SIMPL<span>A</span>ST
            </h2>

            <!-- FORM -->
            <form method="POST" action="{{ route('login.process') }}">
                @csrf

                <label>
                    Username <span>*</span>
                </label>

                <input
                    type="text"
                    name="username"
                    placeholder="Masukkan username"
                >

                <label>
                    Password <span>*</span>
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                >

                <button type="submit">
                    Log in
                </button>

            </form>

            <!-- INFO -->
            <div class="info-box">
                🔒 Sistem ini aman dan hanya dapat diakses oleh pengguna yang memiliki izin
            </div>

        </div>

    </div>

</div>

<!-- SWEET ALERT -->

@if(session('warning'))
<script>
    Swal.fire({
        icon: 'warning',
        title: 'Oops!',
        text: '{{ session('warning') }}',
        confirmButtonColor: '#16c79a'
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Login Gagal',
        text: '{{ session('error') }}',
        confirmButtonColor: '#16c79a'
    });
</script>
@endif

<!-- INIT ICON -->
<script>
    lucide.createIcons();
</script>

</body>
</html>