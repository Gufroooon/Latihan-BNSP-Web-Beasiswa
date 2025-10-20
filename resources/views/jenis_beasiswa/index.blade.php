<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jenis Beasiswa</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e8ba3 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 80px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: slideDown 0.8s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            color: #1e3c72;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            padding: 8px;
            border-radius: 10px;
            color: white;
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            list-style: none;
        }

        .nav-menu a {
            color: #1e3c72;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            position: relative;
        }

        .nav-menu a:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #1e3c72;
            transition: width 0.3s;
        }

        .nav-menu a:hover:after {
            width: 100%;
        }

        .container {
            max-width: 1000px;
            margin: 120px auto 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .page-header h3 {
            font-size: 32px;
            font-weight: 800;
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .page-header p {
            color: #666;
            font-size: 16px;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .action-bar {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 25px;
        }

        .btn {
            padding: 12px 28px;
            border-radius: 10px;
            border: none;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(30, 60, 114, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(30, 60, 114, 0.4);
        }

        .btn-sm {
            padding: 6px 14px;
            font-size: 12px;
        }

        .btn-warning {
            background: #ffc107;
            color: #000;
        }

        .btn-warning:hover {
            background: #e0a800;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
            transform: translateY(-2px);
        }

        .table-wrapper {
            overflow-x: auto;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        thead {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
        }

        thead th {
            padding: 18px 15px;
            text-align: left;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tbody tr {
            border-bottom: 1px solid #e9ecef;
            transition: all 0.3s;
        }

        tbody tr:hover {
            background: #f8f9fa;
            transform: scale(1.01);
        }

        tbody td {
            padding: 18px 15px;
            color: #495057;
            font-size: 14px;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .footer-actions {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .btn-back {
            background: white;
            color: #1e3c72;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(30, 60, 114, 0.2);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: 2px solid #1e3c72;
        }

        .btn-back:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(30, 60, 114, 0.3);
            background: #1e3c72;
            color: white;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #999;
        }

        .empty-state i {
            font-size: 64px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state p {
            font-size: 18px;
            color: #666;
        }

        @media (max-width: 968px) {
            .navbar {
                padding: 20px 40px;
            }

            .nav-menu {
                display: none;
            }

            .container {
                padding: 30px 20px;
                margin-top: 100px;
            }

            .page-header h3 {
                font-size: 24px;
            }

            .table-wrapper {
                font-size: 12px;
            }

            thead th, tbody td {
                padding: 12px 8px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <span>BeasiswaPro</span>
        </div>
        <ul class="nav-menu">
            <li><a href="{{ route('jenis_beasiswa.index') }}">Pilihan Beasiswa</a></li>
            <li><a href="{{ route('beasiswa.create') }}">Daftar</a></li>
            <li><a href="{{ route('beasiswa.index') }}">Hasil</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="page-header">
            <h3><i class="fas fa-list-alt"></i> Daftar Jenis Beasiswa</h3>
            <p>Kelola jenis beasiswa yang tersedia</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <div class="action-bar">
            <a href="{{ route('jenis_beasiswa.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Tambah Jenis Beasiswa
            </a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jenis Beasiswa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenisBeasiswas as $index => $jenis)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $jenis->nama }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('jenis_beasiswa.edit', $jenis->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('jenis_beasiswa.destroy', $jenis->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="footer-actions">
            <a href="{{ url('/') }}" class="btn-back">
                <i class="fas fa-home"></i>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>