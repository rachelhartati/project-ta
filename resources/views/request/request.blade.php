<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pesanan - SIMPLAST</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f4f4f4;
        }

        .container {
            display: flex;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            width: 260px;
            background: linear-gradient(to bottom, #10c9a3, #00997b);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 30px 22px;
            color: white;
            overflow: auto;
            transition: 0.3s;
            z-index: 1000;
        }

        .logo {
            font-size: 34px;
            font-weight: 700;
            margin-bottom: 50px;
            transition: 0.3s;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 28px;
        }

        .menu li a {
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 17px;
            font-weight: 500;
            transition: 0.3s;
        }

        .menu li a:hover {
            transform: translateX(5px);
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 260px;
            width: 100%;
            transition: 0.3s;
        }

        /* ================= SIDEBAR CLOSE ================= */

        .sidebar.close {
            width: 90px;
        }

        .sidebar.close .logo {
            font-size: 18px;
        }

        .sidebar.close .menu li a span {
            display: none;
        }

        .main.full {
            margin-left: 90px;
        }

        /* ================= TOPBAR ================= */

        .topbar {
            height: 70px;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
            border-bottom: 1px solid #ddd;
        }

        .menu-toggle {
            font-size: 30px;
            color: #444;
            cursor: pointer;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
            color: #444;
        }

        .admin-profile i {
            font-size: 28px;
        }

        /* ================= CONTENT ================= */

        .content {
            padding: 30px;
        }

        .title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .subtitle {
            color: #777;
            margin-bottom: 30px;
        }

        /* ================= FILTER ================= */

        .filter-box {
            background: white;
            border-radius: 12px;
            padding: 16px;
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .input-group {
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .input {
            height: 48px;
            width: 260px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 0 14px 0 42px;
            outline: none;
            font-size: 14px;
        }

        .select {
            height: 48px;
            width: 180px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 0 14px;
            outline: none;
            background: white;
            font-size: 14px;
        }

        .date-input {
            height: 48px;
            width: 180px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 0 14px 0 42px;
            outline: none;
            font-size: 14px;
        }

        .btn-add {
            height: 48px;
            background: #01C094;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0 20px;
            font-size: 14px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            margin-left: auto;
            white-space: nowrap;
        }

        .btn-add:hover {
            background: #019e7a;
        }

        /* ================= TABLE ================= */

        .table-box {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background: #f8f8f8;
            padding: 16px;
            text-align: left;
            font-size: 13px;
            color: #666;
        }

        table td {
            padding: 16px;
            border-top: 1px solid #eee;
            font-size: 14px;
            vertical-align: middle;
        }

        .badge {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
        }

        .green {
            background: #d8f7df;
            color: #1ca54f;
        }

        .red {
            background: #ffe0e0;
            color: #d94b4b;
        }

        .status-success {
            color: #1ca54f;
            font-weight: 600;
            font-size: 13px;
        }

        .status-warning {
            color: #f0a500;
            font-weight: 600;
            font-size: 13px;
        }

        /* ================= ACTION BUTTON ================= */

        .action {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-action {
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
            font-size: 16px;
        }

        .btn {
            padding: 7px 12px;
            border: none;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .btn-view {
            background: #e8fff7;
            color: #00b386;
        }

        .btn-edit {
            background: #fff4dd;
            color: #d99a00;
        }

        .btn-delete {
            background: #ffe5e5;
            color: #e53935;
        }


        .action {
            display: flex;
            gap: 8px;
        }

        .btn-view:hover {
            background: #00b386;
            color: white;
            transform: translateY(-2px);
        }

        .btn-more {
            background: #f1f3f5;
            color: #666;
        }

        .btn-more:hover {
            background: #dfe3e6;
            color: #111;
            transform: translateY(-2px);
        }

        /* ================= FOOTER ================= */

        .table-footer {
            padding: 20px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #777;
        }

        /* ================= PAGINATION ================= */

        .pagination {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .pagination button {
            width: 34px;
            height: 34px;
            border: none;
            border-radius: 50%;
            background: #4a4a4a;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            transition: 0.3s;
        }

        .pagination button:hover {
            background: #222;
        }

        .page-number {
            width: 28px;
            height: 28px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 15px;
            color: #111;
            transition: 0.3s;
        }

        .page-number:hover {
            background: #efefef;
        }

        .page-number.active {
            background: #d9d9d9;
            font-weight: 600;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:768px) {

            .sidebar {
                width: 90px;
            }

            .menu li a span {
                display: none;
            }

            .logo {
                font-size: 18px;
            }

            .main {
                margin-left: 90px;
            }

            .main.full {
                margin-left: 90px;
            }

            .filter-box {
                flex-direction: column;
                align-items: stretch;
            }

            .input,
            .select,
            .date-input {
                width: 100%;
            }

            .table-box {
                overflow-x: auto;
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
                    <a href="#">
                        <i class="bi bi-file-earmark"></i>
                        <span>Kelola Pesanan</span>
                    </a>
                </li>

                <li>
                    <a href="">
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
                    Daftar Pesanan
                </div>

                <!-- FILTER -->
                <div class="filter-box">

                    <div class="input-group">
                        <i class="bi bi-search"></i>

                        <input type="text" class="input" placeholder="Cari nama agen...">
                    </div>

                    <select class="select">
                        <option>Status</option>
                        <option>Disetujui</option>
                        <option>Pending</option>
                    </select>

                    <div class="input-group">
                        <i class="bi bi-calendar-event"></i>

                        <input type="text" class="date-input" placeholder="Pilih tanggal">
                    </div>

                    <a href="{{route('request.create')}}" class="btn-add">
                        <i class="bi bi-plus-lg"></i> Tambah
                    </a>

                </div>

                <!-- TABLE -->
                <div class="table-box">

                    <table>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pesan</th>
                                <th>Nama Agen</th>
                                <th>Ukuran Plastik</th>
                                <th>Total Karung</th>
                                <th>Total Berat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($requests as $req)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$req->tanggal_request}}</td>
                                <td>{{$req->agent->nama_agent}}</td>
                                <td><span class="badge green">{{$req->item->nama_item}}</span></td>
                                <td>{{$req->jumlah_barang}}</td>
                                <td>{{$req->total}}</td>
                                <td><span class="status-success">{{$req->status}}</span></td>
                                <td>
                                    <div class="action">

                                        
                                        <a href="{{route('request.detail', $req->id)}}" class="btn btn-add">
                                            Detail
                                        </a>


                                        <a href="{{route('request.edit', $req->id)}}" class="btn btn-edit">
                                            Edit
                                        </a>

                                        <form action="{{route('request.delete', $req->id)}}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus Request ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete">
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
                    <!-- FOOTER -->
                    <div class="table-footer">

                        <div>
                            Menampilkan {{ $requests->count() }} dari {{ $requests->total() }} pesanan
                        </div>

                        @if ($requests->lastPage() > 1)
                        <div class="pagination">
                            {{-- Tombol Prev --}}
                            <button onclick="window.location='{{ $requests->previousPageUrl() }}'"
                                {{ $requests->onFirstPage() ? 'disabled' : '' }}>
                                <i class="bi bi-chevron-left"></i>
                            </button>

                            {{-- Nomor Halaman --}}
                            @for ($i = 1; $i <= $requests->lastPage(); $i++)
                                <div class="page-number {{ $requests->currentPage() == $i ? 'active' : '' }}"
                                    onclick="window.location='{{ $requests->url($i) }}'">
                                    {{ $i }}
                                </div>
                                @endfor

                                {{-- Tombol Next --}}
                                <button onclick="window.location='{{ $requests->nextPageUrl() }}'"
                                    {{ $requests->currentPage() == $requests->lastPage() ? 'disabled' : '' }}>
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                        </div>
                        @endif

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
