<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SIMPLAST</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f4f4f4;
        }

        .container{
            display:flex;
        }

        /* ================= SIDEBAR ================= */

        .sidebar{
            width:260px;
            background:linear-gradient(to bottom, #10c9a3, #00997b);
            height:100vh;
            position:fixed;
            left:0;
            top:0;
            padding:30px 22px;
            color:white;
            overflow:auto;
            transition:0.3s;
            z-index:1000;
        }

        .logo{
            font-size:34px;
            font-weight:700;
            margin-bottom:50px;
            transition:0.3s;
        }

        .menu{
            list-style:none;
        }

        .menu li{
            margin-bottom:28px;
        }

        .menu li a{
            text-decoration:none;
            color:white;
            display:flex;
            align-items:center;
            gap:14px;
            font-size:17px;
            font-weight:500;
            transition:0.3s;
        }

        .menu li a:hover{
            transform:translateX(5px);
        }

        /* ================= MAIN ================= */

        .main{
            margin-left:260px;
            width:100%;
            transition:0.3s;
        }

        /* ================= SIDEBAR CLOSE ================= */

        .sidebar.close{
            width:90px;
        }

        .sidebar.close .logo{
            font-size:18px;
        }

        .sidebar.close .menu li a span{
            display:none;
        }

        .main.full{
            margin-left:90px;
        }

        /* ================= TOPBAR ================= */

        .topbar{
            height:70px;
            background:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 30px;
            border-bottom:1px solid #ddd;
        }

        .top-left{
            display:flex;
            align-items:center;
        }

        .menu-toggle{
            font-size:30px;
            color:#444;
            cursor:pointer;
        }

        .admin-profile{
            display:flex;
            align-items:center;
            gap:10px;
            font-size:15px;
            color:#444;
        }

        .admin-profile i{
            font-size:28px;
        }

        /* ================= CONTENT ================= */

        .content{
            padding:30px;
        }

        .title{
            font-size:30px;
            font-weight:700;
            margin-bottom:5px;
        }

        .subtitle{
            color:#777;
            margin-bottom:30px;
        }

        /* ================= CARD ================= */

        .card-container{
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(160px,1fr));
            gap:15px;
            margin-bottom:30px;
        }

        .card{
            background:white;
            border-radius:12px;
            padding:14px;
            display:flex;
            align-items:center;
            gap:12px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-3px);
        }

        .icon-box{
            width:45px;
            height:45px;
            border-radius:10px;
            background:#dff6ea;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-shrink:0;
        }

        .icon-box i{
            font-size:20px;
            color:#10c9a3;
        }

        .card h4{
            font-size:13px;
            color:#666;
            margin-bottom:3px;
        }

        .card h2{
            font-size:22px;
            font-weight:700;
        }

        .card small{
            color:#888;
            font-size:11px;
        }

        /* ================= GRID ================= */

        .grid-2{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:20px;
            margin-bottom:20px;
        }

        .grid-bottom{
            display:grid;
            grid-template-columns:2fr 1fr;
            gap:20px;
        }

        /* ================= TABLE ================= */

        .table-box{
            background:white;
            border-radius:12px;
            overflow:hidden;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .table-header{
            padding:15px 20px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            border-bottom:1px solid #eee;
            font-weight:600;
        }

        .btn-lihat{
            background:#10c9a3;
            color:white;
            border:none;
            padding:6px 12px;
            border-radius:6px;
            font-size:12px;
            cursor:pointer;
            transition:0.3s;
        }

        .btn-lihat:hover{
            background:#0cab89;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{
            background:#f8f8f8;
            padding:12px;
            font-size:13px;
            text-align:left;
            color:#666;
        }

        table td{
            padding:12px;
            font-size:13px;
            border-top:1px solid #eee;
        }

        .badge-success{
            background:#d8f7df;
            color:#1ca54f;
            padding:5px 10px;
            border-radius:6px;
            font-size:12px;
            font-weight:600;
        }

        .badge-warning{
            background:#fff1d6;
            color:#f0a500;
            padding:5px 10px;
            border-radius:6px;
            font-size:12px;
            font-weight:600;
        }

        /* ================= INFO CARD ================= */

        .info-card{
            background:white;
            border-radius:12px;
            padding:20px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .info-card h3{
            margin-bottom:20px;
            font-size:18px;
        }

        .info-item{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:20px;
        }

        .info-icon{
            width:45px;
            height:45px;
            border-radius:10px;
            background:#ececec;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .info-icon i{
            font-size:20px;
            color:#666;
        }

        .info-item small{
            color:#888;
        }

        .info-item p{
            font-weight:600;
            margin-top:3px;
        }

        /* ================= MODAL ================= */

        .modal{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.4);
            display:none;
            justify-content:center;
            align-items:center;
            z-index:2000;
            padding:20px;
        }

        .modal-content{
            background:white;
            width:100%;
            max-width:900px;
            border-radius:15px;
            overflow:hidden;
            animation:popup 0.3s ease;
        }

        @keyframes popup{
            from{
                transform:scale(0.9);
                opacity:0;
            }
            to{
                transform:scale(1);
                opacity:1;
            }
        }

        .modal-header{
            padding:18px 20px;
            background:#10c9a3;
            color:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .close-btn{
            font-size:24px;
            cursor:pointer;
        }

        .modal-body{
            padding:20px;
            max-height:500px;
            overflow:auto;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:1000px){

            .grid-2,
            .grid-bottom{
                grid-template-columns:1fr;
            }

        }

        @media(max-width:768px){

            .sidebar{
                width:90px;
            }

            .menu li a span{
                display:none;
            }

            .logo{
                font-size:18px;
            }

            .main{
                margin-left:90px;
            }

            .main.full{
                margin-left:90px;
            }

            .content{
                padding:20px;
            }

        }

    </style>
</head>

<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">

        <div class="logo">
            SIMPLAST
        </div>

        <ul class="menu">

            <li>
                <a href="#">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('kelola-pesanan') }}">
                    <i class="bi bi-file-earmark"></i>
                    <span>Kelola Pesanan</span>
                </a>
            </li>

            <li>
                <a href="{{ route('kelola-setoran') }}">
                    <i class="bi bi-wallet2"></i>
                    <span>Kelola Setoran</span>
                </a>
            </li>

            <li>
                <a href="{{ route('agent.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Agen & Anggota</span>
                </a>
            </li>

             <li>
                <a href="{{ route('request.index') }}">
                    <i class="bi bi-box-arrow-up"></i>
                    <span>Request</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-cash"></i>
                    <span>Rekap Upah</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-clock-history"></i>
                    <span>Riwayat</span>
                </a>
            </li>

             <li>
                <a href="{{route('item.index')}}">
                    <i class="bi bi-box2"></i>
                    <span>Item</span>
                </a>
            </li>

            <li>
                <a href="{{route('user.index')}}">
                    <i class="bi bi-person"></i>
                    <span>User</span>
                </a>
            </li>

             <li>
                <a href="{{route('role.index')}}">
                   <i class="bi bi-key"></i>
                    <span>Role</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </li>

        </ul>

    </div>

    <!-- MAIN -->
    <div class="main" id="main">

        <!-- TOPBAR -->
        <div class="topbar">

            <div class="top-left">
                <i class="bi bi-list menu-toggle" id="menuToggle"></i>
            </div>

            <div class="admin-profile">
                <i class="bi bi-person-circle"></i>
                Admin
            </div>

        </div>

        <!-- CONTENT -->
        <div class="content">

            <div class="title">
                Dashboard
            </div>

            <div class="subtitle">
                Selamat Datang, Rachel! Berikut ringkasan aktivitas sistem.
            </div>

            <!-- CARD -->
            <div class="card-container">

                <div class="card">

                    <div class="icon-box">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <div>
                        <h4>Total Agen</h4>
                        <h2>10</h2>
                        <small>Agen terdaftar</small>
                    </div>

                </div>

                <div class="card">

                    <div class="icon-box">
                        <i class="bi bi-person-badge-fill"></i>
                    </div>

                    <div>
                        <h4>Total Anggota</h4>
                        <h2>10</h2>
                        <small>Anggota terdaftar</small>
                    </div>

                </div>

                <div class="card">

                    <div class="icon-box">
                        <i class="bi bi-box-seam-fill"></i>
                    </div>

                    <div>
                        <h4>Bahan Keluar</h4>
                        <h2>10</h2>
                        <small>Total bahan keluar</small>
                    </div>

                </div>

                <div class="card">

                    <div class="icon-box">
                        <i class="bi bi-wallet-fill"></i>
                    </div>

                    <div>
                        <h4>Total Penyetoran</h4>
                        <h2>10</h2>
                        <small>Total hasil produksi</small>
                    </div>

                </div>

                <div class="card">

                    <div class="icon-box">
                        <i class="bi bi-cash-stack"></i>
                    </div>

                    <div>
                        <h4>Total Upah</h4>
                        <h2>10</h2>
                        <small>Total upah diberikan</small>
                    </div>

                </div>

            </div>

            <!-- TABLE TOP -->
            <div class="grid-2">

                <!-- PESANAN -->
                <div class="table-box">

                    <div class="table-header">
                        Pesanan Bahan Terbaru
                        <button class="btn-lihat" onclick="openModal('modalPesanan')">
                            Lihat Semua
                        </button>
                    </div>

                    <table>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Agen</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Budi</td>
                                <td>50kg</td>
                                <td>7 Maret 2026</td>
                                <td><span class="badge-success">Selesai</span></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Rachel</td>
                                <td>20kg</td>
                                <td>7 Maret 2026</td>
                                <td><span class="badge-warning">Diproses</span></td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <!-- PENYETORAN -->
                <div class="table-box">

                    <div class="table-header">
                        Penyetoran Terbaru
                        <button class="btn-lihat" onclick="openModal('modalSetoran')">
                            Lihat Semua
                        </button>
                    </div>

                    <table>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Agen</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Budi</td>
                                <td>1500 pcs</td>
                                <td>7 Maret 2026</td>
                                <td><span class="badge-success">Selesai</span></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Rachel</td>
                                <td>500 pcs</td>
                                <td>7 Maret 2026</td>
                                <td><span class="badge-warning">Diproses</span></td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- BOTTOM -->
            <div class="grid-bottom">

                <div class="table-box">

                    <div class="table-header">
                        Perhitungan Upah Terbaru
                    </div>

                    <table>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Agen</th>
                                <th>Total Produksi</th>
                                <th>Upah/pcs</th>
                                <th>Total Upah</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Budi</td>
                                <td>1500 pcs</td>
                                <td>Rp 250</td>
                                <td>Rp 650.000</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <!-- INFO -->
                <div class="info-card">

                    <h3>Informasi Sistem</h3>

                    <div class="info-item">

                        <div class="info-icon">
                            <i class="bi bi-calendar-event"></i>
                        </div>

                        <div>
                            <small>Tanggal Hari Ini</small>
                            <p>7 Maret 2026</p>
                        </div>

                    </div>

                    <div class="info-item">

                        <div class="info-icon">
                            <i class="bi bi-clock"></i>
                        </div>

                        <div>
                            <small>Waktu</small>
                            <p id="clock"></p>
                        </div>

                    </div>

                    <div class="info-item">

                        <div class="info-icon">
                            <i class="bi bi-person-fill"></i>
                        </div>

                        <div>
                            <small>Login Sebagai</small>
                            <p>Admin</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- MODAL PESANAN -->
<div class="modal" id="modalPesanan">

    <div class="modal-content">

        <div class="modal-header">
            <h3>Data Pesanan Lengkap</h3>
            <span class="close-btn" onclick="closeModal('modalPesanan')">&times;</span>
        </div>

        <div class="modal-body">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Agen</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Budi</td>
                        <td>50kg</td>
                        <td>7 Maret 2026</td>
                        <td><span class="badge-success">Selesai</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Rachel</td>
                        <td>20kg</td>
                        <td>7 Maret 2026</td>
                        <td><span class="badge-warning">Diproses</span></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Andi</td>
                        <td>70kg</td>
                        <td>6 Maret 2026</td>
                        <td><span class="badge-success">Selesai</span></td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<!-- MODAL SETORAN -->
<div class="modal" id="modalSetoran">

    <div class="modal-content">

        <div class="modal-header">
            <h3>Data Penyetoran Lengkap</h3>
            <span class="close-btn" onclick="closeModal('modalSetoran')">&times;</span>
        </div>

        <div class="modal-body">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Agen</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Budi</td>
                        <td>1500 pcs</td>
                        <td>7 Maret 2026</td>
                        <td><span class="badge-success">Selesai</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Rachel</td>
                        <td>500 pcs</td>
                        <td>7 Maret 2026</td>
                        <td><span class="badge-warning">Diproses</span></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Sinta</td>
                        <td>2000 pcs</td>
                        <td>6 Maret 2026</td>
                        <td><span class="badge-success">Selesai</span></td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<script>

    // SIDEBAR TOGGLE
    const menuToggle = document.getElementById("menuToggle");
    const sidebar = document.getElementById("sidebar");
    const main = document.getElementById("main");

    menuToggle.addEventListener("click", () => {

        sidebar.classList.toggle("close");
        main.classList.toggle("full");

    });

    // MODAL
    function openModal(id){
        document.getElementById(id).style.display = "flex";
    }

    function closeModal(id){
        document.getElementById(id).style.display = "none";
    }

    // CLOCK
    function updateClock(){

        const now = new Date();

        let h = String(now.getHours()).padStart(2,'0');
        let m = String(now.getMinutes()).padStart(2,'0');
        let s = String(now.getSeconds()).padStart(2,'0');

        document.getElementById("clock").innerText = `${h}:${m}:${s}`;

    }

    setInterval(updateClock,1000);
    updateClock();

            {{-- ========================================================= --}}
            {{-- ===================== DASHBOARD AGEN ==================== --}}
            {{-- ========================================================= --}}

            <div id="agenDashboard" style="display:none;">

                <div class="title">
                    Welcome To Dashboard Agen
                </div>

                <div class="card-container">

                    <div class="card">
                        <h4>Total Pengambilan</h4>
                        <h2>10</h2>
                    </div>

                    <div class="card">
                        <h4>Setoran Hari Ini</h4>
                        <h2>10</h2>
                    </div>

                    <div class="card">
                        <h4>Jumlah Anggota</h4>
                        <h2>10</h2>
                    </div>

                </div>

                {{-- BUTTON --}}
                <div class="button-container">

                    <button class="btn-green">
                        <i class="bi bi-plus-circle"></i>
                        Input Setoran
                    </button>

                    <button class="btn-outline">
                        <i class="bi bi-plus-circle"></i>
                        Pengambilan Material
                    </button>

                </div>

                <div class="table-container">

                    <table>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Agen</th>
                                <th>Anggota</th>
                                <th>Jumlah/pcs</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>07 Maret 2025</td>
                                <td>Murti</td>
                                <td>Noel</td>
                                <td>100 pcs</td>
                                <td class="status-success">Disetujui</td>
                                <td>Selesai</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>07 Maret 2025</td>
                                <td>Murti</td>
                                <td>Ayu</td>
                                <td>200 pcs</td>
                                <td class="status-pending">Pending</td>
                                <td>-</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>07 Maret 2025</td>
                                <td>Murti</td>
                                <td>Sulis</td>
                                <td>350 pcs</td>
                                <td class="status-danger">Terlambat</td>
                                <td>Telat Setor</td>
                            </tr>

                        </tbody>

                    </table>

                    <div class="pagination">

                        <a href="#">Previous</a>

                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>

                        <a href="#">Next</a>

                    </div>

                </div>

            </div>

        </div>

    </div>
{{-- ========================================================= --}}
{{-- =================== DASHBOARD ANGGOTA =================== --}}
{{-- ========================================================= --}}

<div id="anggotaDashboard" style="display:none;">

    {{-- ================= HEADER ================= --}}
    <div style="margin-bottom:30px;">

        <div class="dashboard-title" style="
            font-size:38px;
            font-weight:700;
            color:#111;
            line-height:1.2;
        ">
            Dashboard
        </div>

        <div style="
            color:#666;
            font-size:15px;
            margin-top:8px;
        ">
            Selamat Datang,
            <span style="
                color:#01C094;
                font-weight:600;
            ">
                Rachel
            </span>
        </div>

    </div>

    {{-- ================= CARD ================= --}}
    <div style="
        display:grid;
        grid-template-columns:repeat(3, 1fr);
        gap:20px;
        margin-bottom:25px;
        width:100%;
        box-sizing:border-box;
    ">

        {{-- CARD 1 --}}
        <div style="
            background:white;
            border-radius:18px;
            padding:22px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
            display:flex;
            align-items:center;
            gap:15px;
            min-width:0;
            box-sizing:border-box;
        ">

            <div style="
                width:60px;
                height:60px;
                min-width:60px;
                background:#e9f8f1;
                border-radius:12px;
                display:flex;
                justify-content:center;
                align-items:center;
                color:#4f8a3f;
                font-size:30px;
            ">
                <i class="bi bi-download"></i>
            </div>

            <div>

                <h4 style="
                    font-size:15px;
                    color:#666;
                    margin-bottom:7px;
                    font-weight:500;
                    margin-top:0;
                ">
                    Total Setoran
                </h4>

                <div style="
                    display:flex;
                    align-items:end;
                    gap:8px;
                ">
                    <h2 class="card-number" style="
                        font-size:42px;
                        font-weight:700;
                        line-height:1;
                        margin:0;
                    ">
                        350
                    </h2>

                    <span style="
                        font-size:15px;
                        color:#666;
                        margin-bottom:5px;
                    ">
                        pcs
                    </span>
                </div>

                <p style="
                    font-size:12px;
                    color:#888;
                    margin-top:5px;
                    margin-bottom:0;
                ">
                    Periode ini
                </p>

            </div>

        </div>

        {{-- CARD 2 --}}
        <div style="
            background:white;
            border-radius:18px;
            padding:22px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
            display:flex;
            align-items:center;
            gap:15px;
            min-width:0;
            box-sizing:border-box;
        ">

            <div style="
                width:60px;
                height:60px;
                min-width:60px;
                background:#e9f8f1;
                border-radius:12px;
                display:flex;
                justify-content:center;
                align-items:center;
                color:#4f8a3f;
                font-size:28px;
            ">
                <i class="bi bi-wallet2"></i>
            </div>

            <div>

                <h4 style="
                    font-size:15px;
                    color:#666;
                    margin-bottom:7px;
                    font-weight:500;
                    margin-top:0;
                ">
                    Total Gaji
                </h4>

                <h2 class="salary-number" style="
                    font-size:35px;
                    font-weight:700;
                    line-height:1.2;
                    margin:0;
                ">
                    Rp. 200.000
                </h2>

                <p style="
                    font-size:12px;
                    color:#888;
                    margin-top:5px;
                    margin-bottom:0;
                ">
                    Periode ini
                </p>

            </div>

        </div>

        {{-- CARD 3 --}}
        <div style="
            background:white;
            border-radius:18px;
            padding:22px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
            display:flex;
            align-items:center;
            gap:15px;
            min-width:0;
            box-sizing:border-box;
        ">

            <div style="
                width:60px;
                height:60px;
                min-width:60px;
                background:#e9f8f1;
                border-radius:12px;
                display:flex;
                justify-content:center;
                align-items:center;
                color:#4f8a3f;
                font-size:30px;
            ">
                <i class="bi bi-clipboard-check"></i>
            </div>

            <div>

                <h4 style="
                    font-size:15px;
                    color:#666;
                    margin-bottom:7px;
                    font-weight:500;
                    margin-top:0;
                ">
                    Jumlah Transaksi
                </h4>

                <div style="
                    display:flex;
                    align-items:end;
                    gap:8px;
                ">
                    <h2 class="card-number" style="
                        font-size:42px;
                        font-weight:700;
                        line-height:1;
                        margin:0;
                    ">
                        5
                    </h2>

                    <span style="
                        font-size:15px;
                        color:#666;
                        margin-bottom:5px;
                    ">
                        kali
                    </span>
                </div>

                <p style="
                    font-size:12px;
                    color:#888;
                    margin-top:5px;
                    margin-bottom:0;
                ">
                    Periode ini
                </p>

            </div>

        </div>

    </div>

    {{-- ================= FILTER ================= --}}
    <div style="
        margin-bottom:20px;
        width:100%;
        box-sizing:border-box;
    ">

        <label style="
            font-size:13px;
            color:#666;
            font-weight:500;
        ">
            Filter Nama Agen:
        </label>

        <input type="text" style="
            width:100%;
            margin-top:7px;
            padding:13px;
            border:1px solid #dcdcdc;
            border-radius:8px;
            outline:none;
            background:white;
            box-sizing:border-box;
        ">

    </div>

    {{-- ================= TABLE ================= --}}
    <div class="table-wrapper" style="
        background:white;
        border-radius:15px;
        padding:20px;
        margin-bottom:25px;
        box-shadow:0 2px 10px rgba(0,0,0,0.08);
        width:100%;
        overflow-x:auto;
        -webkit-overflow-scrolling:touch;
        box-sizing:border-box;
    ">

        <table style="
            width:100%;
            border-collapse:collapse;
            min-width:600px;
        ">

            <thead>

                <tr>

                    <th style="
                        background:#f5f5f5;
                        padding:15px;
                        border:1px solid #ddd;
                        white-space:nowrap;
                        text-align:center;
                    ">
                        No
                    </th>

                    <th style="
                        background:#f5f5f5;
                        padding:15px;
                        border:1px solid #ddd;
                        white-space:nowrap;
                        text-align:center;
                    ">
                        Tanggal
                    </th>

                    <th style="
                        background:#f5f5f5;
                        padding:15px;
                        border:1px solid #ddd;
                        white-space:nowrap;
                        text-align:center;
                    ">
                        Jumlah setoran
                    </th>

                    <th style="
                        background:#f5f5f5;
                        padding:15px;
                        border:1px solid #ddd;
                        white-space:nowrap;
                        text-align:center;
                    ">
                        Harga/pcs
                    </th>

                    <th style="
                        background:#f5f5f5;
                        padding:15px;
                        border:1px solid #ddd;
                        white-space:nowrap;
                        text-align:center;
                    ">
                        Total
                    </th>

                    <th style="
                        background:#f5f5f5;
                        padding:15px;
                        border:1px solid #ddd;
                        white-space:nowrap;
                        text-align:center;
                    ">
                        Status
                    </th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">1</td>
                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">07 Maret 2025</td>
                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">100 pcs</td>
                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">Rp 1.500</td>
                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">Rp 150.000</td>

                    <td style="
                        padding:15px;
                        border:1px solid #ddd;
                        color:green;
                        font-weight:600;
                        text-align:center;
                    ">
                        Disetujui
                    </td>

                </tr>

                <tr>

                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">2</td>
                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">08 Maret 2025</td>
                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">250 pcs</td>
                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">Rp 1.500</td>
                    <td style="padding:15px;border:1px solid #ddd;text-align:center;">Rp 375.000</td>

                    <td style="
                        padding:15px;
                        border:1px solid #ddd;
                        color:orange;
                        font-weight:600;
                        text-align:center;
                    ">
                        Pending
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>
{{-- ===================== POPUP SECTION ===================== --}}

<div class="overlay" id="overlay"></div>

{{-- PROFILE POPUP --}}
<div class="popup" id="profilePopup">

    <h3>Informasi Profil</h3>

    <p><strong>Nama:</strong> Admin SIMPLAST</p>
    <p><strong>Email:</strong> admin@simplast.com</p>
    <p><strong>Role:</strong> Administrator</p>

    <button onclick="closePopup()">Tutup</button>

</div>

{{-- CALENDAR POPUP --}}
<div class="popup" id="calendarPopup">

    <h3>Kalender</h3>

    <input type="date" style="
        width:100%;
        padding:10px;
        border:1px solid #ccc;
        border-radius:8px;
    ">

    <button onclick="closePopup()">Tutup</button>

</div>

{{-- ===================== SCRIPT SECTION ==================== --}}

<script>

    function showProfile(){

        document.getElementById('profilePopup').style.display='block';
        document.getElementById('overlay').style.display='block';

    }

    function showCalendar(){

        document.getElementById('calendarPopup').style.display='block';
        document.getElementById('overlay').style.display='block';

    }

    function closePopup(){

        document.getElementById('profilePopup').style.display='none';
        document.getElementById('calendarPopup').style.display='none';
        document.getElementById('overlay').style.display='none';

    }

</script>

</body>
</html>