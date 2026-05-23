<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Agen & Anggota - SIMPLAST</title>

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

        /* ACTIVE MENU */

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

        .header-action {
            display: flex;
            gap: 10px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding: 10px 40px 10px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            width: 250px;
        }

        .search-box i {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }

        .btn-add {
            background: #01C094;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
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

        .anggota-badge {
            background: #e8fff9;
            color: #01C094;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        /* ================= BUTTON AKSI ================= */

        .btn {
            padding: 7px 12px;
            border: none;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
        }

        .btn-view {
            background: #e8fff9;
            color: #01C094;
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

        /* ================= PAGINATION ================= */

        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #666;
        }

        .page-number {
            display: flex;
            gap: 8px;
        }

        .page-number a {
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 5px;
            background: #f0f0f0;
            color: #333;
            font-size: 13px;
        }

        .page-number .active {
            background: #01C094;
            color: white;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .form-control,
        .form-select {
            display: block;
            width: 100%;
            padding: 8px 12px;
            font-size: 14px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            outline: none;
            font-family: 'Poppins', sans-serif;
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

            .table-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-box input {
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
                    <a href="{{ route('agent.index') }}" <i class="bi bi-people"></i>
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
                {{-- TABLE BOX --}}
                <div class="table-box">

                    <div class="table-header">

                        <h3>Tambah Agen</h3>

                    </div>

                    <form action="{{route('agent.update', $agent->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Agent</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama lengkap"
                                        name="nama_agent" value="{{old('nama_agent', $agent->nama_agent)}}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Alamat Agent</label>
                                    <input type="text" class="form-control" placeholder="Masukkan alamat"
                                        name="alamat_agent" value="{{old('alamat_agent', $agent->alamat_agent)}}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" placeholder="Masukkan no telepon"
                                        name="no_tlp_agent" value="{{old('no_tlp_agent', $agent->no_tlp_agent)}}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">PIC</label>
                                    <select class="form-select" name="pic_id">
                                        <option value="" disabled selected>Pilih PIC</option>
                                        {{-- <option value="1">Agent 1</option> --}}
                                        {{-- @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->nama }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>

                            </div>
                        </div>


                        <div class="" style="margin-top: 10px">
                            <button type="submit" class="btn btn-add">
                                <i class="bi bi-save me-1"></i> Save
                            </button>
                            <a href="{{ route('agent.index') }}" class="btn btn-outline-secondary"
                                style="text-decoration: none;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
