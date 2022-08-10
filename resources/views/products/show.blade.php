@extends('products.layout')

@section('content')
<div class="row py-3">
    <div class="col-lg-6">
        <h2>View Product: {{ $product->name }}</h2>
    </div>
    <div class="col-lg-6 text-end">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="input-name"><strong>Name:</strong></label>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label for="input-price"><strong>Price (MYR):</strong></label>
            {{ number_format($product->price, 2) }}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label for="input-details"><strong>Details:</strong></label>
            {{ $product->details }}
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection