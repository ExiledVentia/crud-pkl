<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Toko</title>
</head>

<body style="bg-gray-800">
    <a href="../">Kembali</a>

    <h1>Daftar Toko</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>no</th>
            <th>nama toko</th>
            <th>alamat toko</th>
            <th>nomor telp</th>
            <th>Action</th>
        </tr>
        @foreach ($toko as $t)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $t->nama_toko }}</td>
                <td>{{ $t->alamat }}</td>
                <td>{{ $t->nomor_telepon }}</td>
                <td>
                    <a href="{{ route('toko.edit', $t) }}">Edit</a> |
                    <form action="{{ route('toko.destroy', $t) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <button>
        <a href="{{ route('toko.create') }}">Tambah Toko</a>
    </button>
</body>

</html>
