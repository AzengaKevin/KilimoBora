@extends('layouts.backend')

@section('content')

    <h4>Add Product</h4>

    <form action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="post">
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
            <label for="description">Product Description *</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    value="{{ old('description') }}" aria-describedby="descriptionHelp" rows="5" cols="10"></textarea>
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="priceHelp" class="form-text text-muted">Agreed price for the prodct in question</small>
        </div>
        <div class="form-group">
            <label for="price">Price (optional)</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                    value="{{ old('price') }}" aria-describedby="priceHelp">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="priceHelp" class="form-text text-muted">Agreed price for the prodct in question</small>
        </div>

        <div class="form-group">
            <label for="product_category_id">Product Category</label>
            <select name="product_category_id" id="product_category_id" class="form-control @error('product_category_id') is-invalid @enderror">
                <option value="">Select...</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('product_category_id')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="priceHelp" class="form-text text-muted">A simple category price for products</small>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror" />
            @error('image')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="clearfix mb-3">

            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>

    </form>
@endsection
