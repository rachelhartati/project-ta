<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Request - SIMPLAST</title>

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

        /* ================= FORM ================= */

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 500;
        }

        .form-control,
        .form-select {
            display: block;
            width: 100%;
            padding: 10px 12px;
            font-size: 14px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            outline: none;
            font-family: 'Poppins', sans-serif;
            background: white;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #01C094;
        }

        .form-control[readonly] {
            background: #f7f7f7;
            color: #555;
            cursor: default;
        }

        .form-text {
            font-size: 12px;
            color: #888;
            margin-top: 4px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -8px;
        }

        .row.g-3>* {
            padding: 8px;
        }

        .col-md-6 {
            flex: 0 0 50%;
            width: 50%;
        }

        .col-md-12 {
            flex: 0 0 100%;
            width: 100%;
        }

        .form-actions {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        /* ================= BUTTON ================= */

        .btn {
            padding: 9px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-save {
            background: #01C094;
            color: white;
        }

        .btn-save:hover {
            background: #019e7a;
        }

        .btn-cancel {
            background: #f0f0f0;
            color: #555;
        }

        .btn-cancel:hover {
            background: #e0e0e0;
        }

        /* ================= DIVIDER ================= */

        .section-label {
            font-size: 13px;
            font-weight: 600;
            color: #01C094;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            padding-bottom: 6px;
            border-bottom: 1px solid #eee;
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

            .col-md-6 {
                flex: 0 0 100%;
                width: 100%;
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
                    <a href="/kelola-pesanan" class="active-menu">
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
                    <a href="{{ route('agent.index') }}">
                        <i class="bi bi-people"></i>
                        <span>Agen & Anggota</span>
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
                        <i class="bi bi-box"></i>
                        <span>Item</span>
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

                <div class="table-box">

                    <div class="table-header">
                        <h3>Form Tambah Request</h3>
                    </div>

                    <form action="{{route('request.store')}}" method="POST">
                        @csrf

                        <div class="section-label">Informasi Pesanan</div>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Tanggal Pesan</label>
                                <input type="date" class="form-control" name="tanggal_request"
                                    value="{{ date('Y-m-d') }}" disabled>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nama Agen</label>
                                <input type="text" class="form-control" value="{{ auth()->user()->agent->nama_agent }}"
                                    disabled>
                                <input type="hidden" name="agent_id" value="{{ auth()->user()->agent_id }}">
                            </div>

                        </div>

                        <div class="section-label" style="margin-top: 20px;">Detail Barang</div>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Item</label>
                                <select class="form-select" name="item_id" id="item_id">
                                    <option value="" disabled selected>Pilih item</option>
                                    @foreach($items as $item)
                                    <option value="{{ $item->id }}" data-stok="{{ $item->stok }}">{{ $item->nama_item }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jumlah(dalam karung)</label>
                                <input type="number" class="form-control" placeholder="Masukkan jumlah"
                                    name="jumlah_barang" min="1" id="jumlah_barang">
                                <p class="form-text" id="info-stok"></p>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Total (dalam KG)</label>
                                <input type="text" class="form-control" name="total" id="total" placeholder="0"
                                    readonly>
                                <p class="form-text">Total dihitung otomatis jumlah(karung) × 25</p>
                            </div>

                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-save">
                                <i class="bi bi-save"></i> Simpan
                            </button>
                            <a href="#" class="btn btn-cancel">
                                <i class="bi bi-x-lg"></i> Batal
                            </a>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <script>
        document.getElementById('jumlah_barang').addEventListener('input', function () {
            document.getElementById('total').value = this.value * 25;
        });

    </script>
    <script>
        document.getElementById('item_id').addEventListener('change', function () {
            const stok = this.options[this.selectedIndex].dataset.stok;
            document.getElementById('jumlah_barang').max = stok;
            document.getElementById('info-stok').textContent = 'Stok tersedia: ' + stok + ' karung';
        });

        document.getElementById('jumlah_barang').addEventListener('input', function () {
            const max = parseInt(this.max);
            if (parseInt(this.value) > max) {
                this.value = max;
            }
            document.getElementById('total').value = this.value * 25;
        });

    </script>

</body>

</html>
