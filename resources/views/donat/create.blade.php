<!DOCTYPE html>
<html>
<head>
    <title>Tambah Donat</title>
</head>
<body>
    
<h1>Tambah Donat</h1>

<form action="/donat" method="POST">
    @csrf

    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga"><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stok"><br><br>

    <button type="submit">Simpan</button>
</form>