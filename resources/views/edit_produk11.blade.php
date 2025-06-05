<h1>Edit Produk</h1>

<form method="POST" action="{{ route('produk.update', $produk->id) }}">
    @csrf
    @method('PUT')

    <label>Nama Produk</label><br>
    <input type="text" name="nama" value="{{ $produk->nama }}"><br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi">{{ $produk->deskripsi }}</textarea><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga" value="{{ $produk->harga }}"><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
