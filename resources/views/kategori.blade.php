@extends('layout.main')
@section('konten')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Kategori</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        {{-- @dd($daftarKategori) --}}
        <div class="container">
            <h1>{{ $title }}</h1>
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
                    <th>&nbsp;</th>
                </tr>
                @php
                    $baris=1
                @endphp
                    @foreach ($daftarKategori as $kategori)
                    <tr>
                        <td>{{$baris++}}</td>
                        <td>{{$kategori->kd_kategori}}</td>
                        <td>{{$kategori->name_kategori}}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </main>
@endsection
