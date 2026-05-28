<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Setoran - SIMPLAST</title>

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
            font-size:32px;
            font-weight:700;
            margin-bottom:5px;
        }

        .subtitle{
            color:#777;
            margin-bottom:30px;
        }

        /* ================= FILTER ================= */

        .filter-box{
            background:white;
            border-radius:12px;
            padding:16px;
            display:flex;
            gap:20px;
            align-items:center;
            margin-bottom:25px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            flex-wrap:wrap;
            justify-content:space-between;
        }

        .filter-left{
            display:flex;
            gap:20px;
            align-items:center;
            flex-wrap:wrap;
        }

        .input-group{
            position:relative;
        }

        .input-group i{
            position:absolute;
            left:14px;
            top:50%;
            transform:translateY(-50%);
            color:#999;
        }

        .select{
            height:48px;
            width:220px;
            border:1px solid #ddd;
            border-radius:8px;
            padding:0 14px;
            outline:none;
            background:white;
            font-size:14px;
        }

        .date-input{
            height:48px;
            width:200px;
            border:1px solid #ddd;
            border-radius:8px;
            padding:0 14px;
            outline:none;
            font-size:14px;
        }

        /* ================= BUTTON ================= */

        .btn{
            height:48px;
            background:#00997b;
            color:white;
            border:none;
            padding:0 20px;
            border-radius:8px;
            cursor:pointer;
            font-weight:500;
            font-size:14px;
            display:flex;
            align-items:center;
            gap:8px;
            transition:0.3s;
        }

        .btn:hover{
            background:#00806a;
        }

        /* ================= TABLE ================= */

        .table-box{
            background:white;
            border-radius:16px;
            overflow:hidden;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{
            background:#f8f8f8;
            padding:16px;
            text-align:left;
            font-size:13px;
            color:#666;
        }

        table td{
            padding:16px;
            border-top:1px solid #eee;
            font-size:14px;
            vertical-align:middle;
        }

        .badge{
            padding:6px 12px;
            border-radius:6px;
            font-size:12px;
            font-weight:600;
        }

        .badge-green{
            background:#d8f7df;
            color:#1ca54f;
        }

        /* ================= ACTION BUTTON ================= */

        .action{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .btn-action{
            height:36px;
            padding:0 14px;
            border:none;
            border-radius:8px;
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:6px;
            cursor:pointer;
            transition:0.3s;
            font-size:13px;
            font-weight:500;
            font-family:'Poppins', sans-serif;
            text-decoration:none;
            white-space:nowrap;
        }

        .action form{
            display:contents;
        }

        .btn-view{
            background:#e8fff7;
            color:#00b386;
        }

        .btn-view:hover{
            background:#00b386;
            color:white;
            transform:translateY(-2px);
        }

        .btn-print{
            background:#f1f3f5;
            color:#666;
        }

        .btn-print:hover{
            background:#dfe3e6;
            color:#111;
            transform:translateY(-2px);
        }

        .btn-edit{
            background:#fff8e1;
            color:#f59e0b;
        }

        .btn-edit:hover{
            background:#f59e0b;
            color:white;
            transform:translateY(-2px);
        }

        .btn-delete{
            background:#fff0f0;
            color:#ef4444;
        }

        .btn-delete:hover{
            background:#ef4444;
            color:white;
            transform:translateY(-2px);
        }

        /* ================= FOOTER ================= */

        .table-footer{
            padding:20px 24px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            font-size:13px;
            color:#777;
        }

        /* ================= PAGINATION ================= */

        .pagination{
            display:flex;
            align-items:center;
            gap:12px;
        }

        .pagination button{
            width:34px;
            height:34px;
            border:none;
            border-radius:50%;
            background:#4a4a4a;
            color:white;
            cursor:pointer;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:14px;
            transition:0.3s;
        }

        .pagination button:hover{
            background:#222;
        }

        .page-number{
            width:28px;
            height:28px;
            border-radius:6px;
            display:flex;
            align-items:center;
            justify-content:center;
            cursor:pointer;
            font-size:15px;
            color:#111;
            transition:0.3s;
        }

        .page-number:hover{
            background:#efefef;
        }

        .page-number.active{
            background:#d9d9d9;
            font-weight:600;
        }

        /* ================= RESPONSIVE ================= */

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

            .filter-box{
                flex-direction:column;
                align-items:stretch;
            }

            .select,
            .date-input{
                width:100%;
            }

            .table-box{
                overflow-x:auto;
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
                <a href="{{ route('dashboard') }}">
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
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    <span>Kelola Setoran</span>
                </a>
            </li>

            <li>
                <a href="{{ route('agent.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Kelola Agen & Anggota</span>
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

            <i class="bi bi-list menu-toggle" id="menuToggle"></i>

            <div class="admin-profile">
                <i class="bi bi-person-circle"></i>
                Admin
            </div>

        </div>

        <!-- CONTENT -->
        <div class="content">

            <div class="title">
                Setoran
            </div>

            <div class="subtitle">
                Catat setoran hasil kerja anggota
            </div>

            <!-- FILTER -->
            <div class="filter-box">

                <div class="filter-left">

                    <select class="select">
                        <option>Semua Anggota</option>
                        <option>Ayu</option>
                        <option>Sella</option>
                        <option>Sulis</option>
                    </select>

                    <input type="month" class="date-input">

                </div>

                <a href="{{route('kelola-setoran.create')}}" class="btn">
                    <i class="bi bi-plus-lg"></i>
                    Buat Setoran
                </a>

            </div>

            <!-- TABLE -->
            <div class="table-box">

                <table>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Anggota</th>
                            <th>Tanggal</th>
                            <th>Total (pcs)</th>
                            <th>Harga (pcs)</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($storan as $stor)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$stor->agent->nama_agent}}</td>
                            <td>{{$stor->tanggal_setoran}}</td>
                            <td>{{$stor->jumlah_pcs}}</td>
                            <td>Rp {{ number_format($stor->harga_per_pcs, 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($stor->total, 0, ',', '.') }}</td>
                            <td><span class="badge badge-green">{{$stor->status}}</span></td>
                            <td>
                                <div class="action">

                                    <a href="#" class="btn-action btn-edit">
                                        
                                        Edit
                                    </a>

                                    <form action="#" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-action btn-delete">
                                            
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                       
                    </tbody>

                </table>

                <!-- FOOTER -->
                <div class="table-footer">

                    <div>
                        Menampilkan 1–3 dari 3 data
                    </div>

                    <div class="pagination">

                        <button>
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <div class="page-number active">1</div>

                        <button>
                            <i class="bi bi-chevron-right"></i>
                        </button>

                    </div>

                </div>

            </div>

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

</script>

</body>
</html>
