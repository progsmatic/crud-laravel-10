@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Buat Produk Baru</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
        </div>
    </div>
</div>
<br>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Ada yang error dalam inputan.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                <input type="text" name="nama" class="form-control" placeholder="Buku">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori :</strong>
                <input class="form-control" name="kategori" placeholder="Fiksi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok :</strong>
                <input type="text" name="stok" class="form-control" placeholder="12">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input class="form-control" name="harga" placeholder="20000">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection