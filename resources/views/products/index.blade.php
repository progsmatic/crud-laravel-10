@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <center>
                <br>
                <h2>5210311012</h2>
                <h2>Ilham Riky Rismawan</h2>
            </center>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Buat Produk Baru</a>
        </div>
    </div>
</div>
<br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th>Harga</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->nama }}</td>
        <td>{{ $product->kategori }}</td>
        <td>{{ $product->stok }}</td>
        <td>{{ $product->harga }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Lihat</a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}

@endsection