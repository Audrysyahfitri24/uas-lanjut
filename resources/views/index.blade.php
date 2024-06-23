<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data Pasien</title>
</head>
<body>
    <div class="container">
        <h1>Data Pasien</h1>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>
        <table class="table table-striped">
            <tr>
                <th>Nama Pasien</th>
                <th>Nama Wali Pasien</th>
                <th>Alamat Pasien</th>
                <th>Aksi</th>
            </tr>
            @foreach ($pasiens as $pasien)
            <tr>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->nama_wali }}</td>
                <td>{{ $pasien->alamat_pasien }}</td>
                <td>
                    <a href="{{ route('pasien.edit', ['pasien' => $pasien->id]) }}" class="btn btn-success">EDIT</a>
                    <form action="{{ route('pasien.delete', ['pasien' => $pasien->id]) }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" >DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div>
            {{ $pasiens->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>