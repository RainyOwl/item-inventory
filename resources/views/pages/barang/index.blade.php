<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Barang</title>
</head>

<body>
  <a href="{{ route('barang.create') }}">Tambah</a>
  <table>
    <tr>
      <th>Kode</th>
      <th>Nama</th>
      <th>Jenis</th>
      <th>Jumlah</th>
      <th>Harga</th>
    </tr>
    @foreach ($daftarBarang as $barang)
      <tr>
        <td>{{ $barang->kode }}</td>
        <td>{{ $barang->nama }}</td>
        <td>{{ $barang->jenis }}</td>
        <td>{{ $barang->jumlah }}</td>
        <td>{{ $barang->harga }}</td>
      </tr>
    @endforeach
  </table>
</body>

</html>
