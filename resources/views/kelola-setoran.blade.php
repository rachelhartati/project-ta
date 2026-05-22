<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Setoran - SIMPLAST</title>

    {{-- FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        .container{
            display:flex;
        }

        /* ================= SIDEBAR ================= */

        .sidebar{
            width:250px;
            background:linear-gradient(to bottom, #01C094, #018f6f);
            color:white;
            padding:25px 20px;
            position:fixed;
            left:0;
            top:0;
            height:100vh;
        }

        .logo{
            font-size:32px;
            font-weight:700;
            letter-spacing:2px;
            margin-bottom:50px;
        }

        .menu{
            list-style:none;
        }

        .menu li{
            margin-bottom:25px;
        }

        .menu li a{
            color:white;
            text-decoration:none;
            display:flex;
            align-items:center;
            gap:12px;
            font-size:17px;
            font-weight:500;
            transition:0.3s;
        }

        .menu li a:hover{
            transform:translateX(5px);
        }

        /* ================= MAIN ================= */

        .main{
            margin-left:250px;
            width:100%;
        }

        /* ================= TOPBAR ================= */

        .topbar{
            height:70px;
            background:white;
            border-bottom:1px solid #ddd;

            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:0 25px;
        }

        .topbar-left i{
            font-size:28px;
            cursor:pointer;
            color:#555;
        }

        .topbar-right{
            display:flex;
            align-items:center;
            gap:10px;
            color:#555;
            font-size:14px;
        }

        .topbar-right i{
            font-size:22px;
        }

        /* ================= CONTENT ================= */

        .content{
            padding:30px;
        }

        .title{
            font-size:32px;
            font-weight:600;
            margin-bottom:5px;
        }

        .subtitle{
            color:#666;
            font-size:14px;
            margin-bottom:35px;
        }

        /* ================= FILTER ================= */

        .filter-section{
            display:flex;
            justify-content:space-between;
            align-items:flex-end;
            margin-bottom:25px;
            flex-wrap:wrap;
            gap:20px;
        }

        .filter-group{
            display:flex;
            gap:30px;
            flex-wrap:wrap;
        }

        .filter-item{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .filter-item label{
            font-size:14px;
            color:#555;
            width:90px;
        }

        .filter-item select,
        .filter-item input{
            width:220px;
            padding:10px;
            border:1px solid #ccc;
            border-radius:5px;
            outline:none;
        }

        /* ================= BUTTON ================= */

        .btn{
            background:#01a874;
            color:white;
            border:none;
            padding:12px 20px;
            border-radius:5px;
            cursor:pointer;
            font-weight:500;
            display:flex;
            align-items:center;
            gap:8px;
            transition:0.3s;
        }

        .btn:hover{
            background:#018f6f;
        }

        /* ================= TABLE ================= */

        .table-container{
            background:white;
            border:1px solid #ddd;
            border-radius:5px;
            overflow:hidden;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{
            background:#f8f8f8;
            padding:15px;
            text-align:left;
            font-size:14px;
            border-bottom:1px solid #ddd;
        }

        table td{
            padding:15px;
            font-size:14px;
            border-bottom:1px solid #eee;
        }

        .status{
            background:#d9f8df;
            color:#16a34a;
            padding:5px 12px;
            border-radius:4px;
            font-size:12px;
            display:inline-block;
        }

        .action{
            display:flex;
            gap:10px;
        }

        .action button{
            width:32px;
            height:32px;
            border:1px solid #ccc;
            background:white;
            border-radius:4px;
            cursor:pointer;
            transition:0.3s;
        }

        .action button:hover{
            background:#f0f0f0;
        }

        /* ================= PAGINATION ================= */

        .pagination{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:18px;
            font-size:14px;
            color:#555;
        }

        .pagination-number{
            display:flex;
            gap:8px;
            align-items:center;
        }

        .pagination-number a{
            text-decoration:none;
            color:#333;
            font-size:13px;
        }

        .active{
            background:#555;
            color:white !important;
            width:18px;
            height:18px;
            display:flex;
            justify-content:center;
            align-items:center;
            border-radius:50%;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:900px){

            .sidebar{
                width:90px;
            }

            .logo{
                font-size:18px;
            }

            .menu li a span{
                display:none;
            }

            .main{
                margin-left:90px;
            }

            .filter-section{
                flex-direction:column;
                align-items:flex-start;
            }

        }

    </style>

</head>
<body>

<div class="container">

    {{-- SIDEBAR --}}
    <div class="sidebar">

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
                    <i class="bi bi-clipboard-data"></i>
                    <span>Kelola Pesanan</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-box-seam"></i>
                    <span>Kelola Setoran</span>
                </a>
            </li>

            <li>
                <a href="{{ route('kelola-agenanggota') }}">
                    <i class="bi bi-people"></i>
                    <span>Kelola Agen & Anggota</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-cash-stack"></i>
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

    {{-- MAIN --}}
    <div class="main">

        {{-- TOPBAR --}}
        <div class="topbar">

            <div class="topbar-left">
                <i class="bi bi-list"></i>
            </div>

            <div class="topbar-right">
                <i class="bi bi-person-circle"></i>
                <span>Admin</span>
            </div>

        </div>

        {{-- CONTENT --}}
        <div class="content">

            <div class="title">
                Setoran
            </div>

            <div class="subtitle">
                Catat setoran hasil kerja anggota
            </div>

            {{-- FILTER --}}
            <div class="filter-section">

                <div class="filter-group">

                    <div class="filter-item">
                        <label>Pilih Anggota</label>
                        <span>:</span>

                        <select>
                            <option>Semua Anggota</option>
                            <option>Ayu</option>
                            <option>Sella</option>
                            <option>Sulis</option>
                        </select>
                    </div>

                    <div class="filter-item">
                        <label>Periode</label>
                        <span>:</span>

                        <input type="month">
                    </div>

                </div>

                <button class="btn">
                    <i class="bi bi-plus-lg"></i>
                    Buat Setoran
                </button>

            </div>

            {{-- TABLE --}}
            <div class="table-container">

                <table>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Anggota</th>
                            <th>Tanggal</th>
                            <th>Total (pcs)</th>
                            <th>Total Berat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Ayu</td>
                            <td>20 Mei 2025</td>
                            <td>3.500 pcs</td>
                            <td>5 Kg</td>
                            <td>
                                <span class="status">Disetorkan</span>
                            </td>

                            <td>
                                <div class="action">
                                    <button>
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button>
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Sella</td>
                            <td>20 Mei 2025</td>
                            <td>4.200 pcs</td>
                            <td>6 Kg</td>
                            <td>
                                <span class="status">Disetorkan</span>
                            </td>

                            <td>
                                <div class="action">
                                    <button>
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button>
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Sulis</td>
                            <td>20 Mei 2025</td>
                            <td>5.000 pcs</td>
                            <td>7 Kg</td>
                            <td>
                                <span class="status">Disetorkan</span>
                            </td>

                            <td>
                                <div class="action">
                                    <button>
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button>
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                            </td>

                        </tr>

                    </tbody>

                </table>

                {{-- PAGINATION --}}
                <div class="pagination">

                    <div>
                        Menampilkan 1 - 5 dari 25 data
                    </div>

                    <div class="pagination-number">

                        <a href="#">
                            <i class="bi bi-chevron-left"></i>
                        </a>

                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>

                        <a href="#">
                            <i class="bi bi-chevron-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>