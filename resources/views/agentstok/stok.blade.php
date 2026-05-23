<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Agen - SIMPLAST</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            overflow: auto;
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

        /* ================= FILTER BOX ================= */

        .filter-box {
            background: white;
            border-radius: 12px;
            padding: 16px 20px;
            display: flex;
            gap: 14px;
            align-items: center;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            flex-wrap: wrap;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding: 10px 40px 10px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            width: 260px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
        }

        .search-box i {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }

        .filter-select {
            height: 42px;
            padding: 0 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            background: white;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            min-width: 180px;
        }

        /* ================= TABLE BOX ================= */

        .table-box {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .table-header h3 {
            font-size: 20px;
            font-weight: 600;
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
            font-size: 13px;
            color: #666;
        }

        table td {
            padding: 14px;
            font-size: 14px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }

        /* ================= BADGE ================= */

        .badge-item {
            display: inline-flex;
            align-items: center;
            padding: 5px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            background: #e8fff7;
            color: #00b386;
        }

        .stok-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
        }

        .stok-aman {
            background: #d8f7df;
            color: #1ca54f;
        }

        .stok-rendah {
            background: #fff8e1;
            color: #f0a500;
        }

        .stok-habis {
            background: #ffe0e0;
            color: #d94b4b;
        }

        /* ================= EMPTY STATE ================= */

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #aaa;
        }

        .empty-state i {
            font-size: 50px;
            margin-bottom: 14px;
            display: block;
        }

        .empty-state p {
            font-size: 15px;
        }

        /* ================= PAGINATION ================= */

        .pagination-wrap {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #666;
        }

        .page-links {
            display: flex;
            gap: 6px;
        }

        .page-links a {
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 6px;
            background: #f0f0f0;
            color: #333;
            font-size: 13px;
        }

        .page-links .active {
            background: #01C094;
            color: white;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width: 900px) {
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

            .filter-box {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box input,
            .filter-select {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        {{-- SIDEBAR --}}
        <div class="sidebar">

            <div class="logo">SIMPLAST</div>

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
                    <a href="{{ route('item.index') }}">
                        <i class="bi bi-box"></i>
                        <span>Item</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="active-menu">
                        <i class="bi bi-boxes"></i>
                        <span>Stok Agen</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="bi bi-person"></i>
                        <span>User</span>
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

                <div class="title">Stok Agen</div>
                <div class="subtitle">Data stok barang yang dimiliki setiap agen</div>


                <div class="table-box">

                    <div class="table-header">
                        <h3>Daftar Stok Per Agen</h3>
                    </div>

                    {{-- TABLE --}}
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Agen</th>
                                <th>Nama Item</th>
                                <th>Jumlah Stok</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($agentstok as $agentStok)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $agentStok->agent->nama_agent ?? '-' }}</td>
                                <td>
                                    <span class="badge-item">{{ $agentStok->item->nama_item ?? '-' }}</span>
                                </td>
                                <td>{{ number_format($agentStok->jumlah_barang, 0, ',', '.') }} karung</td>
                                <td>
                                    @if($agentStok->jumlah_barang <= 0)
                                        <span class="stok-badge stok-habis">
                                            <i class="bi bi-x-circle-fill"></i> Stok Habis
                                        </span>
                                    @elseif($agentStok->jumlah_barang <= 5)
                                        <span class="stok-badge stok-rendah">
                                            <i class="bi bi-exclamation-circle-fill"></i> Stok Rendah
                                        </span>
                                    @else
                                        <span class="stok-badge stok-aman">
                                            <i class="bi bi-check-circle-fill"></i> Stok Aman
                                        </span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">
                                    <div class="empty-state">
                                        <i class="bi bi-boxes"></i>
                                        <p>Belum ada data stok agen</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- PAGINATION --}}
                    @if(isset($agentStoks) && method_exists($agentStoks, 'links'))
                    <div class="pagination-wrap">
                        <span>Menampilkan {{ $agentStoks->count() }} dari {{ $agentStoks->total() }} data</span>
                        <div class="page-links">
                            @if($agentStoks->onFirstPage())
                                <a href="#"><i class="bi bi-chevron-left"></i></a>
                            @else
                                <a href="{{ $agentStoks->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a>
                            @endif

                            @for($i = 1; $i <= $agentStoks->lastPage(); $i++)
                                <a href="{{ $agentStoks->url($i) }}" class="{{ $agentStoks->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a>
                            @endfor

                            @if($agentStoks->hasMorePages())
                                <a href="{{ $agentStoks->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a>
                            @else
                                <a href="#"><i class="bi bi-chevron-right"></i></a>
                            @endif
                        </div>
                    </div>
                    @endif

                </div>

            </div>

        </div>

    </div>

</body>

</html>
