@extends('layout.main')
@section('konten')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">TAMBAH KATEGORI</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <div class="container">
            <h1>{{$title}}</h1>
            <table class="table table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah Stok</th>
                    <th>Kategori ID</th>
                    <th>Edit</th>
                </tr>
                @php
                if(request('page'))
                    $baris=(request('page')-1)*10+1;
                else {
                    $baris=1;
                }
                @endphp
                @foreach ($daftarproduk as $produk)
                <tr>
                    <td>{{$baris++}}</td>
                    <td>{{$produk->kd_produk}}</td>
                    <td>{{$produk->name_produk}}</td>
                    <td>{{$produk->harga}}</td>
                    <td>{{$produk->jml_stok}}</td>
                    <td>{{$produk->kategori->name_kategori}}</td>
                    <td>
                        <a href="{{ url('editproduk') }}/{{ $produk->id }}"><button class="btn btn-primary">EDIT PRODUK</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{$daftarproduk->links()}}
            <a href="daftarprodukbaru"><button class="btn btn-primary mb-4">TAMBAH DATA</button></a>
        </div>
    </main>
@endsection
