<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Pasien</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Pasien</h1>
        <a href="{{ route('pasien.index') }}" class="btn btn-success mb-4">Kembali</a>
        <form action="{{ route('pasien.update', ['id' => $pasien->id]) }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="nama">Nama Pasien</span>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" aria-describedby="nama" name="nama" id="nama" value="{{ $pasien->nama }}">
                
                @error('nama')
                <span class="invalid-feedback">
                    <span>{{ $message }}</span>
                </span>
                @enderror

            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="nama_wali">Nama Wali Pasien</span>
                <input type="text" class="form-control @error('nama_wali') is-invalid @enderror" aria-describedby="nama_wali" name="nama_wali" id="nama_wali" value="{{ $pasien->nama_wali }}">
            
                @error('nama_wali')
                <span class="invalid-feedback">
                    <span>{{ $message }}</span>
                </span>
                @enderror

            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="alamat_pasien">Alamat Pasien</span>
                <input type="text" class="form-control @error('alamat_pasien') is-invalid @enderror" aria-describedby="alamat_pasien" name="alamat_pasien" id="alamat_pasien" value="{{ $pasien->alamat_pasien }}">
            
                @error('alamat_pasien')
                <span class="invalid-feedback">
                    <span>{{ $message }}</span>
                </span>
                @enderror
            
            </div>
            <button type="submit" class="btn btn-primary">Edit Pasien</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>