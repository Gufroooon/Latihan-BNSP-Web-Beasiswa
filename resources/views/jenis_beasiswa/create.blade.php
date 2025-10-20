<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah Jenis Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
    <div class="container my-5 p-4 bg-white rounded shadow-sm" style="max-width: 600px;">
        <h3 class="text-center mb-4">Tambah Jenis Beasiswa</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('jenis_beasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Jenis Beasiswa</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}" required />
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jenis_beasiswa.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
