@extends('layout.main')
@section('konten')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">EDIT PRODUK</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <form action="{{ url('editProduk') }}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="id" value="{{ $dataproduk->id }}">
                    <button class="btn btn-danger">Hapus Data</button>
                </form>
            </div>
        </div>
        <form action="{{ url('editProduk') }}" method="POST">
            @method('patch')
            @csrf
            <input type="hidden" name="id" value="{{ $dataproduk->id }}">
            <div class="mb-3">
                <label for="kd_produk" class="form-label">Kode Produk</label>
                <input type="text" value="{{ $dataproduk->kd_produk }}" name="kd_produk" class="form-control" id="kd_produk"
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
                    <option value="{{ $produk->id }}" hidden selected>{{$produk->name_kategori}}</option>
                    <option value="{{ $produk->id }}">{{ $produk->name_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name_produk" class="form-label">Nama Produk</label>
                <input type="text" value="{{$dataproduk->name_produk}}" name="name_produk" class="form-control" id="name_produk"
                @error('name_produk')
                    is-invalid
                @enderror>
                @error('name_produk')
                    <div class="invallid feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" value="{{$dataproduk->harga}}" name="harga" class="form-control" id="harga"
                @error('harga')
                    is-invalid
                @enderror>
                @error('harga')
                    <div class="invallid feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jml_stok" class="form-label">Jumlah Stok</label>
                <input type="number" value="{{$dataproduk->jml_stok}}" name="jml_stok" class="form-control" id="jml_stok"
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
