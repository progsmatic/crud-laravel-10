@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Edit Produk</h2>
        </div>
        <div class="pull-right">
            <br>
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
        </div>
    </div>
</div>

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
<br>
<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                <input type="text" name="nama" value="{{ $product->nama }}" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori :</strong>
                <input class="form-control" name="kategori" value="{{ $product->kategori }}" placeholder="Kategori">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok :</strong>
                <input class="form-control" name="stok" value="{{ $product->stok }}" placeholder="Stok">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input class="form-control" name="harga" value="{{ $product->harga }}" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection