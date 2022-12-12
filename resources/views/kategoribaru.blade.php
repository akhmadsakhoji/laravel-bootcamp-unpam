@extends('layout.main')
@section('konten')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">TAMBAH KATEGORI</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <form action="kategoriproduk" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kd_kategori" class="form-label">Kode Kategori</label>
                <input type="text" name="kd_kategori" class="form-control" id="kd_kategori" @error('kd_kategori') is-invalid @enderror >
                @error('kd_kategori')
                    <div class="invallid feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name_kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="name_kategori" class="form-control" id="name_kategori">
            </div>
            <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
    </main>
@endsection
