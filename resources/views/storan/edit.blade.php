<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Setoran - SIMPLAST</title>

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

        .active-menu {
            background: rgba(255, 255, 255, 0.15);
            padding: 10px 12px;
            border-radius: 10px;
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

        /* ================= FORM BOX ================= */

        .form-box {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .form-box-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid #eee;
        }

        .form-box-header h3 {
            font-size: 20px;
            font-weight: 600;
        }

        .form-box-header i {
            font-size: 22px;
            color: #00997b;
        }

        /* ================= SECTION LABEL ================= */

        .section-label {
            font-size: 13px;
            font-weight: 600;
            color: #00997b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
            padding-bottom: 8px;
            border-bottom: 1px solid #eee;
        }

        /* ================= FORM GRID ================= */

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
            margin-bottom: 24px;
        }

        .row>* {
            padding: 10px;
        }

        .col-6 {
            flex: 0 0 50%;
            width: 50%;
        }

        .col-12 {
            flex: 0 0 100%;
            width: 100%;
        }

        /* ================= FORM ELEMENTS ================= */

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #444;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            display: block;
            width: 100%;
            height: 48px;
            padding: 0 14px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            font-family: 'Poppins', sans-serif;
            background: white;
            color: #333;
            transition: 0.2s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #00997b;
            box-shadow: 0 0 0 3px rgba(0, 153, 123, 0.08);
        }

        .form-control[readonly] {
            background: #f7f7f7;
            color: #888;
            cursor: default;
        }

        .form-text {
            font-size: 12px;
            color: #999;
            margin-top: 5px;
        }

        /* ================= BUTTONS ================= */

        .form-actions {
            display: flex;
            gap: 12px;
            margin-top: 10px;
        }

        .btn {
            height: 48px;
            padding: 0 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: 0.2s;
        }

        .btn-save {
            background: #00997b;
            color: white;
        }

        .btn-save:hover {
            background: #00806a;
            transform: translateY(-1px);
        }

        .btn-cancel {
            background: #f1f3f5;
            color: #555;
        }

        .btn-cancel:hover {
            background: #dfe3e6;
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

            .col-6 {
                flex: 0 0 100%;
                width: 100%;
            }

            .form-box {
                max-width: 100%;
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
                    <a href="{{ route('kelola-setoran') }}" class="active-menu">
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

                <div class="form-box">

                    <div class="form-box-header">
                        <i class="bi bi-wallet2"></i>
                        <h3>Form Tambah Setoran</h3>
                    </div>

                    <form action="{{route('storan.store')}}" method="POST">
                        @csrf

                        <!-- BAGIAN INFORMASI SETORAN -->
                        <div class="section-label">Informasi Setoran</div>

                        <div class="row">

                            <div class="col-6">
                                <label class="form-label">Agen</label>
                                <select class="form-select" name="agent_id" required>
                                    <option value="" disabled selected>Pilih Agen</option> {{-- di luar foreach --}}
                                    @foreach($agent as $agen)
                                    <option value="{{ $agen->id }}">{{ $agen->nama_agent }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Tanggal Setoran</label>
                                <input type="date" class="form-control" name="tanggal_setoran"
                                    value="{{ date('Y-m-d') }}" required>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="disetorkan">Disetorkan</option>
                                    <option value="belum_disetorkan">Belum Disetorkan</option>
                                </select>
                            </div>

                        </div>

                        <!-- BAGIAN DETAIL ITEM -->
                        <div class="section-label">Detail Item</div>

                        <div class="row">

                            <div class="col-6">
                                <label class="form-label">Item</label>
                                <select class="form-select" name="item_id" id="item_select" required>
                                    <option value="" disabled selected>Pilih Item</option>
                                    @foreach ($items as $item)
                                    <option value="{{ $item->id }}" data-harga="{{ $item->harga_barang}}">
                                        {{ $item->nama_item }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Harga per pcs (Rp)</label>
                                <input type="number" class="form-control" id="harga" name="harga_per_pcs"
                                    placeholder="Harga otomatis diambil dari Item" readonly>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Jumlah (pcs)</label>
                                <input type="number" class="form-control" name="jumlah_pcs"
                                    placeholder="Masukkan jumlah" min="1" required>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Total Harga (Rp)</label>
                                <input type="text" class="form-control" id="total_display" placeholder="Rp 0" readonly>
                                <input type="hidden" name="total" id="total_harga">
                                <p class="form-text">Total dihitung otomatis dari jumlah × harga</p>
                            </div>

                        </div>

                        <!-- TOMBOL AKSI -->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-save">
                                <i class="bi bi-save"></i> Simpan
                            </button>
                            <a href="{{ route('kelola-setoran') }}" class="btn btn-cancel">
                                <i class="bi bi-x-lg"></i> Batal
                            </a>
                        </div>

                    </form>

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

        // AUTO HITUNG TOTAL
        const inputJumlah = document.querySelector('[name="jumlah_pcs"]');
        const inputHarga = document.getElementById('harga');
        const inputTotal = document.getElementById("total_harga"); // hidden → ke database
        const inputTotalDisplay = document.getElementById("total_display"); // tampilan → user

        function hitungTotal() {
            const jumlah = parseInt(inputJumlah.value) || 0;
            const harga = parseInt(inputHarga.value) || 0;
            const total = jumlah * harga;

            inputTotal.value = total; // angka bersih
            inputTotalDisplay.value = 'Rp ' + total.toLocaleString('id-ID'); // tampilan rapi
        }

        inputJumlah.addEventListener("input", hitungTotal);
        inputHarga.addEventListener("input", hitungTotal);

        // ITEM SELECT → AUTO ISI HARGA
        const itemSelect = document.getElementById('item_select');

        itemSelect.addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const harga = selectedOption.getAttribute('data-harga') || 0;
            inputHarga.value = harga;
            hitungTotal();
        });

    </script>




</body>

</html>
