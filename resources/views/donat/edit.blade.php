<!DOCTYPE html>
<html>
<head>
    <title>Edit Donat</title>
</head>
<body>
    
<h1>Edit Donat</h1>

<form action="/donat/{{ $donat->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $donat->nama }}"><br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga" value="{{ $donat->harga }}"><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stok" value="{{ $donat->stok }}"><br><br>

    <button type="submit">Update</button>
</form>