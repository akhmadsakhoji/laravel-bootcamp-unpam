@extends('layout.main')
@section('konten')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">TAMBAH KATEGORI</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <form>
            <div class="mb-3">
                <label for="idkategori" class="form-label">ID Kategori</label>
                <input type="text" class="form-control" id="idkategori" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="namakategori" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="namakategori">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
@endsection
