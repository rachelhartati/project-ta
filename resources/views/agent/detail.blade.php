<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Agen - SIMPLAST</title>

    {{-- FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f5f5f5;
        }

        .container {
            display: flex;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            width: 250px;
            background: linear-gradient(to bottom, #01C094, #018d6f);
            color: white;
            padding: 25px 20px;
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 50px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 28px;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 18px;
            font-weight: 500;
            transition: 0.3s;
        }

        .menu li a:hover {
            transform: translateX(5px);
        }

        .active-menu {
            background: rgba(255, 255, 255, 0.15);
            padding: 12px;
            border-radius: 10px;
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 250px;
            width: 100%;
        }

        /* ================= TOPBAR ================= */

        .topbar {
            height: 70px;
            background: white;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 25px;
        }

        .topbar-left i {
            font-size: 28px;
            color: #555;
            cursor: pointer;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #555;
            font-size: 15px;
        }

        .topbar-right i {
            font-size: 24px;
        }

        /* ================= CONTENT ================= */

        .content {
            padding: 25px;
        }

        .title {
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 25px;
        }

        /* ================= TABLE BOX ================= */

        .table-box {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .table-header h3 {
            font-size: 22px;
        }

        /* ================= DETAIL INFO ================= */

        .detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .detail-item label {
            display: block;
            font-size: 12px;
            color: #888;
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .detail-item p {
            font-size: 15px;
            font-weight: 500;
            color: #333;
        }

        .divider {
            border: none;
            border-top: 1px solid #eee;
            margin: 20px 0;
        }

        /* ================= TABLE ================= */

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            text-align: left;
            padding: 14px;
            background: #f7f7f7;
            font-size: 14px;
        }

        table td {
            padding: 14px;
            font-size: 14px;
            border-bottom: 1px solid #eee;
        }

        /* ================= BUTTON AKSI ================= */

        .btn {
            padding: 7px 12px;
            border: none;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .btn-back {
            background: #f0f0f0;
            color: #555;
        }

        .btn-back:hover {
            background: #e0e0e0;
        }

        .btn-add {
            background: #01C094;
            color: white;
        }

        .btn-add:hover {
            background: #019e7a;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:900px) {

            .sidebar {
                width: 90px;
            }

            .logo {
                font-size: 18px;
            }

            .menu li a span {
                display: none;
            }

            .main {
                margin-left: 90px;
            }

            .detail-grid {
                grid-template-columns: 1fr;
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
                    <a href="/kelola-pesanan">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Kelola Pesanan</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('kelola-setoran') }}">
                        <i class="bi bi-box-seam"></i>
                        <span>Kelola Setoran</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('agent.index') }}" class="active-menu">
                        <i class="bi bi-people"></i>
                        <span>Agen & Anggota</span>
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

                {{-- DETAIL AGENT --}}
                <div class="table-box">

                    <div class="table-header">
                        <h3>Detail Agen</h3>
                    </div>

                    <div class="detail-grid">

                        <div class="detail-item">
                            <label>Nama Agen</label>
                            <p>{{ $agent->nama_agent }}</p>
                        </div>

                        <div class="detail-item">
                            <label>No HP</label>
                            <p>{{ $agent->no_tlp_agent }}</p>
                        </div>

                        <div class="detail-item">
                            <label>Alamat</label>
                            <p>{{ $agent->alamat_agent }}</p>
                        </div>

                        <div class="detail-item">
                            <label>PIC</label>
                            <p>{{ $agent->pic ? $agent->pic->nama_lengkap : '-' }}</p>
                        </div>

                    </div>

                </div>

                {{-- TABEL ANGGOTA --}}
                <div class="table-box">

                    <div class="table-header">
                        <h3>Daftar Anggota</h3>
                        <a href="{{route('agent.tambah.anggota', $agent->id)}}" class="btn btn-add">
                            Tambah
                        </a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>No Tlp</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($user as $users)
                            <td>{{$loop->iteration}}</td>
                            <td>{{$users->nama_lengkap}}</td>
                            <td>{{$users->alamat}}</td>
                            <td>{{$users->no_tlp}}</td>
                            <td>
                                @if($users->status == 1)
                                <span>Aktif</span>
                                @else
                                <span>Non-Aktif</span>
                                @endif
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
