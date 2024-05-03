<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Barang</title>
</head>

<body>
  <form action="{{ route('barang.store') }}" method="post">
    @csrf

    <div>
      <label for="kode">Kode:</label>
      <input type="text" name="kode" id="kode" />
      @error('kode')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="nama">Nama:</label>
      <input type="text" name="nama" id="nama" />
      @error('nama')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="jenis">Jenis:</label>
      <input type="text" name="jenis" id="jenis" />
      @error('jenis')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="jumlah">Jumlah:</label>
      <input type="number" name="jumlah" id="jumlah" />
      @error('jumlah')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="harga">Harga:</label>
      <input type="text" name="harga" id="harga" />
      @error('harga')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <input type="submit" value="Tambah">

  </form>
</body>

</html>
