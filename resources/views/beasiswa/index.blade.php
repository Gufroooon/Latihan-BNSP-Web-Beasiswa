<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran Beasiswa</title>
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
            max-width: 1200px;
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
            margin-bottom: 40px;
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
            margin-bottom: 30px;
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

        .badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }

        .badge-warning {
            background: #fff3cd;
            color: #856404;
        }

        .badge-success {
            background: #d4edda;
            color: #155724;
        }

        .badge-info {
            background: #d1ecf1;
            color: #0c5460;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
        }

        .btn-primary {
            background: #1e3c72;
            color: white;
        }

        .btn-primary:hover {
            background: #163056;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.3);
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

        .btn-outline-primary {
            background: white;
            color: #1e3c72;
            border: 2px solid #1e3c72;
        }

        .btn-outline-primary:hover {
            background: #1e3c72;
            color: white;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .berkas-preview {
            max-width: 80px;
            max-height: 80px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #e9ecef;
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
            <h3><i class="fas fa-list-check"></i> Hasil Pendaftaran Beasiswa</h3>
            <p>Daftar lengkap pendaftar beasiswa yang telah terdaftar</p>
        </div>

        <!-- Alert Success -->
        <div class="alert alert-success" style="display: none;">
            <i class="fas fa-check-circle"></i>
            <span>Data berhasil disimpan!</span>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Semester</th>
                        <th>IPK</th>
                        <th>Jenis Beasiswa</th>
                        <th>Status Ajuan</th>
                        <th>Berkas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->semester }}</td>
                        <td>{{ $item->ipk }}</td>
                        <td>{{ $item->jenis_beasiswa ?? '-' }}</td>
                        <td>{{ $item->status_ajuan }}</td>
                        <td>
                            @if($item->berkas)
                                @php
                                    $filePath = public_path('uploads/' . $item->berkas);
                                    $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                                    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
                                @endphp
                                @if(in_array($fileExtension, $imageExtensions))
                                    <img src="{{ asset('uploads/'.$item->berkas) }}" alt="Berkas" class="berkas-preview">
                                @else
                                    <a href="{{ asset('uploads/'.$item->berkas) }}" target="_blank" class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i> Download</a>
                                @endif
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('beasiswa.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('beasiswa.destroy', $item->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Empty State (hidden by default, show when no data) -->
        <!-- <div class="empty-state">
            <i class="fas fa-inbox"></i>
            <p>Belum ada data pendaftaran</p>
        </div> -->

        <div class="footer-actions">
            <a href="{{ url('/') }}" class="btn-back">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>