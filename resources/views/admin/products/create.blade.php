@extends('layouts.backend')

@section('content')

    <h4>Add Product</h4>

    <form action="{{ route('admin.product_categories.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}" aria-describedby="nameHelp">
            @error('name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="nameHelp" class="form-text text-muted">Product Simple Common Name</small>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                    value="{{ old('price') }}" aria-describedby="priceHelp">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="priceHelp" class="form-text text-muted">A simple category price for products</small>
        </div>

        <div class="coleafix mb-3">

            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>

    </form>
@endsection
