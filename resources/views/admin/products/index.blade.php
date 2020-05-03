@extends('layouts.backend')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products</h1>
        <a class="btn btn-primary" href="{{ route('admin.products.create') }}">Add Product</a>
    </div>

    @if($products->count())
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name}}</td>
                            <td>{{ $product->price }}</td>
                            <td><img src="{{ asset($product->imageUrl()) }}" width="96" alt="Product Image"></td>
                            <td>{{ $product->productCategory->name }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" role="button" data-toggle="modal" data-target="#product{{ $product->id }}Modal" class="btn btn-sm btn-danger ml-3">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @include('partials.modals.delete-product')
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="font-weight-bold">Post your first event to the site users</p>
    @endif

@endsection