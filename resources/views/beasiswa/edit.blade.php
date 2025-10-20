<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftaran Beasiswa</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ipk = parseFloat('{{ $pendaftaran->ipk }}');
            const ipkField = document.getElementById('ipk');
            const jenisBeasiswaSelect = document.getElementById('jenis_beasiswa');
            const formElements = document.querySelectorAll('#beasiswaForm input, #beasiswaForm select, #beasiswaForm button');

            ipkField.value = ipk;

            function updateFormState() {
                if (ipk < 3) {
                    formElements.forEach(el => {
                        if (el.id !== 'ipk') el.disabled = true;
                    });
                } else {
                    formElements.forEach(el => el.disabled = false);
                    if (!jenisBeasiswaSelect.value && jenisBeasiswaSelect.options.length > 1) {
                        jenisBeasiswaSelect.selectedIndex = 1;
                    }
                }
            }

            updateFormState();
        });
    </script>
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
            max-width: 700px;
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

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .required::after {
            content: '*';
            color: #dc3545;
            margin-left: 4px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="file"],
        select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s;
            background: white;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        select:focus {
            outline: none;
            border-color: #1e3c72;
            box-shadow: 0 0 0 4px rgba(30, 60, 114, 0.1);
        }

        input[readonly] {
            background: #f8f9fa;
            cursor: not-allowed;
        }

        input:disabled,
        select:disabled {
            background: #f8f9fa;
            cursor: not-allowed;
            opacity: 0.6;
        }

        .text-danger {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
            display: block;
        }

        .file-info {
            font-size: 13px;
            color: #666;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .file-info i {
            color: #1e3c72;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 35px;
            justify-content: space-between;
        }

        .btn {
            padding: 14px 35px;
            border-radius: 50px;
            border: none;
            font-weight: 700;
            font-size: 15px;
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

        .btn-secondary {
            background: white;
            color: #1e3c72;
            border: 2px solid #1e3c72;
        }

        .btn-secondary:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 20px 30px;
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

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn {
                width: 100%;
                justify-content: center;
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
            <h3><i class="fas fa-edit"></i> Edit Pendaftaran Beasiswa</h3>
            <p>Perbarui data pendaftaran beasiswa Anda</p>
        </div>

        <form id="beasiswaForm" action="{{ route('beasiswa.update', $pendaftaran->id) }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nama" class="required">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $pendaftaran->nama) }}" required />
                @error('nama')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="email" class="required">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $pendaftaran->email) }}" required />
                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="no_hp" class="required">No HP</label>
                <input type="number" id="no_hp" name="no_hp" value="{{ old('no_hp', $pendaftaran->no_hp) }}" required />
                @error('no_hp')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="semester" class="required">Semester</label>
                <input type="number" id="semester" name="semester" min="1" max="8" value="{{ old('semester', $pendaftaran->semester) }}" required />
                @error('semester')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="ipk">IPK Terakhir</label>
                <input type="text" id="ipk" readonly />
            </div>

            <div class="form-group">
                <label for="jenis_beasiswa" class="required">Jenis Beasiswa</label>
                <select name="jenis_beasiswa" id="jenis_beasiswa">
                    <option value="">-- Pilih Beasiswa --</option>
                    @foreach($jenisBeasiswas as $jenis)
                        <option value="{{ $jenis->nama }}" {{ old('jenis_beasiswa', $pendaftaran->jenis_beasiswa) == $jenis->nama ? 'selected' : '' }}>{{ $jenis->nama }}</option>
                    @endforeach
                </select>
                @error('jenis_beasiswa')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="berkas">Upload Berkas</label>
                <input type="file" id="berkas" name="berkas" />
                @if($pendaftaran->berkas)
                    <div class="file-info">
                        <i class="fas fa-file-alt"></i>
                        <span>File saat ini: {{ $pendaftaran->berkas }}</span>
                    </div>
                @endif
                @error('berkas')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-actions">
                <a href="{{ route('beasiswa.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i>
                    Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Update Data
                </button>
            </div>
        </form>
    </div>
</body>
</html>