@extends('products.layout')

@section('content')
<div class="row py-3">
    <div class="col-lg-6">
        <h2>Laravel 8 Product CRUD Application</h2>
    </div>
    <div class="col-lg-6 text-end">
        <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p class="mb-0">{{ $message }}</p>
</div>
@endif

<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered">
            <tr>
                <th class="text-end" width="20">No.</th>
                <th width="200">Name</th>
                <th class="text-center" width="120">Price (MYR)</th>
                <th>Details</th>
                <th width="182">Action</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td class="text-end">{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td class="text-center">{{ number_format($product->price, 2) }}</td>
                <td>{{ $product->details }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

{!! $products->links() !!}
@endsection


@section('js')

@endsection