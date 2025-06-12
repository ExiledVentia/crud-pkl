<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Produk</title>
</head>

<body>

    <h1>Daftar Produk</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <a href="../">Kembali</a>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Toko Penjual</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->stok }}</td>
                    <td>{{ $p->toko->nama_toko }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $p) }}">Edit</a> |
                        <form action="{{ route('produk.destroy', $p) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    <a href="{{ route('produk.create') }}">
        <button>Tambah Produk</button>
    </a>

</body>

</html>
