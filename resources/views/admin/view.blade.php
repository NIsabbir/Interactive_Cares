
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Product Details</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td><a href="{{ route('admin.products.index') }}" class="btn btn-primary">Back to Products</a></td>

                    </tr>

            </tbody>
        </table>
    </div>

@endsection
