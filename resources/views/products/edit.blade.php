@extends('products.layout')

@section('content')
<div class="row py-3">
    <div class="col-lg-6">
        <h2>Edit Product: {{ $product->name }}</h2>
    </div>
    <div class="col-lg-6 text-end">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <h3><strong>Whoops!</strong> There were some problems with your input.</h3>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="input-name">Name:</label>
                <input type="text" class="form-control" id="input-name" name="name" placeholder="Product Name" value="" />
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="input-price">Price (MYR):</label>
                <input type="text" class="form-control" id="input-price" name="price" placeholder="0.00" value="" />
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="input-details">Details:</label>
                <textarea class="form-control" id="input-details" name="details" placeholder="Product Details"></textarea>
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>

@endsection

@section('js')
@endsection