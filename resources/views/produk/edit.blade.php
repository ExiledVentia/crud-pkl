<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

    <h1>Edit Produk</h1>

    <form action="{{ route('produk.update', $product->id_produk) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" value="{{ old('nama_produk', $product->nama_produk) }}"><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ old('harga', $product->harga) }}"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ old('stok', $product->stok) }}"><br><br>

        <label>Toko Penjual:</label><br>
        <select name="id_toko">
            @foreach($tokos as $toko)
                <option value="{{ $toko->id_toko }}" {{ $toko->id_toko == $product->id_toko ? 'selected' : '' }}>
                    {{ $toko->nama_toko }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update Produk</button>
        <a href="../">Kembali</a>
    </form>

</body>
</html>
