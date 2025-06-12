<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
</head>

<body>
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="post">
        @csrf
        <label for="id_toko">Toko</label>
        <select name="id_toko" id="id_toko" required>
            <option selected disabled> Pilih Toko</option>
            @foreach ($tokos as $t)
                <option value="{{ $t->id_toko }}">{{ $t->nama_toko }}</option>
            @endforeach
        </select>
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" required>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" required>
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" required>
        <button type="submit">Tambah Produk</button>
    </form>
</body>

</html>
