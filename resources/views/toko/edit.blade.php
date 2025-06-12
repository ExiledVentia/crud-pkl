<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Toko</title>
</head>

<body>
    <h1>Edit Toko</h1>

    <form action="{{ route('toko.update', $toko->id_toko) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_toko">Nama Toko</label>
        <input type="text" name="nama_toko" id="nama_toko" value="{{ old('nama_toko', $toko->nama_toko) }}"><br><br>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $toko->alamat) }}"><br><br>

        <label for="nomor_telepon">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon"
            value="{{ old('nomor_telepon', $toko->nomor_telepon) }}"><br><br>

        <button type="submit">Update Toko</button>
    </form>

    <br>
    <a href="{{ route('toko.index') }}">Kembali ke Daftar Toko</a>
</body>

</html>
