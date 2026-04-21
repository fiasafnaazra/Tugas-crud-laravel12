<!DOCTYPE html>
<html>
<head>
    <title>Data Donat</title>
</head>
<body>
    
<h1>Data Donat</h1>

<a href="/donat/create">+ Tambah Donat</a>

<br><br>

<table border="1" cellpadding="10" width="80%">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($donats as $d)
    <tr>
        <td>{{ $d->nama }}</td>
        <td>{{ $d->harga }}</td>
        <td>{{ $d->stok }}</td>
        <td>
            <a href="/donat/{{ $d->id }}/edit">Edit</a>

            <form action="/donat/{{ $d->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>