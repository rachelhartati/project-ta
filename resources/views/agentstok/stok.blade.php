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

        /* ================= STOK CARDS ================= */

        .stok-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 18px;
            margin-bottom: 10px;
        }

        .stok-card {
            background: white;
            border-radius: 14px;
            padding: 22px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            border-left: 5px solid #01C094;
            display: flex;
            flex-direction: column;
            gap: 14px;
            transition: 0.25s;
        }

        .stok-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        .stok-card.rendah {
            border-left-color: #f0a500;
        }

        .stok-card.habis {
            border-left-color: #ef4444;
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .card-agent {
            font-size: 15px;
            font-weight: 600;
            color: #222;
        }

        .card-item-name {
            font-size: 13px;
            color: #888;
            margin-top: 3px;
        }

        .card-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #e8fff7;
            color: #01C094;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .card-icon.rendah {
            background: #fff8e1;
            color: #f0a500;
        }

        .card-icon.habis {
            background: #fff0f0;
            color: #ef4444;
        }

        .card-jumlah {
            font-size: 28px;
            font-weight: 700;
            color: #111;
            line-height: 1;
        }

        .card-jumlah span {
            font-size: 14px;
            font-weight: 400;
            color: #888;
        }

        .stok-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            width: fit-content;
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

        /* ================= TABLE BOX (for distribusi) ================= */

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

        .stok-empty {
            text-align: center;
            padding: 60px 20px;
            color: #aaa;
            background: white;
            border-radius: 14px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .stok-empty i {
            font-size: 50px;
            margin-bottom: 14px;
            display: block;
        }

        /* ================= SECTION TITLE ================= */

        .section-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 6px;
            margin-top: 30px;
        }

        .section-subtitle {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        /* ================= ACTION BUTTON ================= */

        .action {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-action {
            height: 34px;
            padding: 0 14px;
            border: none;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 13px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            white-space: nowrap;
        }

        .action form {
            display: contents;
        }

        .btn-edit {
            background: #fff8e1;
            color: #f59e0b;
        }

        .btn-edit:hover {
            background: #f59e0b;
            color: white;
            transform: translateY(-2px);
        }

        .btn-delete {
            background: #fff0f0;
            color: #ef4444;
        }

        .btn-delete:hover {
            background: #ef4444;
            color: white;
            transform: translateY(-2px);
        }

        .btn-tambah {
            height: 38px;
            background: #01C094;
            color: white;
            border: none;
            padding: 0 18px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-tambah:hover {
            background: #018d6f;
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


                {{-- STOK CARDS --}}
                @forelse($agentstok as $agentStok)
                @php
                    $jumlah = $agentStok->jumlah_barang ?? 0;
                    $kondisi = $jumlah <= 0 ? 'habis' : ($jumlah <= 5 ? 'rendah' : 'aman');
                @endphp
                @if($loop->first)
                <div class="stok-grid">
                @endif

                    <div class="stok-card {{ $kondisi !== 'aman' ? $kondisi : '' }}">
                        <div class="card-top">
                            <div>
                                <div class="card-agent">{{ $agentStok->agent->nama_agent ?? '-' }}</div>
                                <div class="card-item-name">{{ $agentStok->item->nama_item ?? '-' }}</div>
                            </div>
                            <div class="card-icon {{ $kondisi !== 'aman' ? $kondisi : '' }}">
                                <i class="bi bi-box-seam"></i>
                            </div>
                        </div>

                        <div>
                            <div class="card-jumlah">
                                {{ number_format($jumlah, 0, ',', '.') }}
                                <span>karung</span>
                            </div>
                        </div>

                        @if($kondisi === 'habis')
                            <span class="stok-badge stok-habis">
                                <i class="bi bi-x-circle-fill"></i> Stok Habis
                            </span>
                        @elseif($kondisi === 'rendah')
                            <span class="stok-badge stok-rendah">
                                <i class="bi bi-exclamation-circle-fill"></i> Stok Rendah
                            </span>
                        @else
                            <span class="stok-badge stok-aman">
                                <i class="bi bi-check-circle-fill"></i> Stok Aman
                            </span>
                        @endif
                    </div>

                @if($loop->last)
                </div>
                @endif
                @empty
                <div class="stok-empty">
                    <i class="bi bi-boxes"></i>
                    <p>Belum ada data stok agen</p>
                </div>
                @endforelse

                {{-- DISTRIBUSI SECTION --}}
                <div class="section-title">Distribusi</div>
                <div class="section-subtitle">Riwayat pemberian item kepada anggota</div>

                <div class="table-box">

                    <div class="table-header">
                        <h3>Daftar Distribusi</h3>
                        <a href="#" class="btn-tambah">
                            <i class="bi bi-plus-lg"></i> Tambah
                        </a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Tanggal Pemberian</th>
                                <th>Item</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="6">
                                    <div class="empty-state">
                                        <i class="bi bi-box-seam"></i>
                                        <p>Belum ada data distribusi</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
