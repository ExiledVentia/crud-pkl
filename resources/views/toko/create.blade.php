<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Toko</title>
</head>

<body>
    <h1>Tambah Toko</h1>
    <form action="{{ route('toko.store') }}" method="post">
        @csrf
        <label for="nama_toko">Nama Toko</label>
        <input type="text" name="nama_toko" id="nama_toko">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <label for="nomor_telepon">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon">
        <button type="submit">Tambah Toko</button>
    </form>
</body>

</html>
