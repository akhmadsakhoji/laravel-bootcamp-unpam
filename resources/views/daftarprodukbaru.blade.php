@extends('layout.main')
@section('konten')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">TAMBAH PRODUK</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <form action="savedaftarproduk" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kd_produk" class="form-label">Kode Produk</label>
                <input type="text" name="kd_produk" class="form-control" id="kd_produk"
                @error('kd_produk')
                    is-invalid
                @enderror>
                @error('kd_produk')
                    <div class="invallid feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategoriid" class="form-label">Kategori ID</label>
                <select class="form-select" id="kategoriid" name="kategoriid" aria-label="Default select example">
                    @foreach ($daftarproduk as $produk)
                    <option selected disabled hidden>Pilih Menu</option>
                    <option value="{{ $produk->id }}">{{ $produk->name_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name_produk" class="form-label">Nama Produk</label>
                <input type="text" name="name_produk" class="form-control" id="name_produk"
                @error('name_produk')
                    is-invalid
                @enderror>
                @error('name_produk')
                    <div class="invallid feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga"
                @error('harga')
                    is-invalid
                @enderror>
                @error('harga')
                    <div class="invallid feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jml_stok" class="form-label">Jumlah Stok</label>
                <input type="number" name="jml_stok" class="form-control" id="jml_stok"
                @error('jml_stok')
                    is-invalid
                @enderror>
                @error('jml_stok')
                    <div class="invallid feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
    </main>
@endsection
