@extends('layouts.backend')

@section('page', 'Edit Product Category ' . $productCategory->name)

@section('content')

    <h4>Edit Product Category</h4>

    <form action="{{ route('admin.product_categories.update', $productCategory) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') ?? $productCategory->name }}" aria-describedby="nameHelp">
            @error('name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="nameHelp" class="form-text text-muted">A simple category name for products</small>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control  @error('description') is-invalid @enderror" id="description"
                        name="description"
                        aria-describedby="descriptionHelp"
                        rows="3">{{ old('description') ?? $productCategory->description }}</textarea>
            @error('description')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="descriptionHelp" class="form-text text-muted">A description for the above category</small>
        </div>

        <div class="coleafix mb-3">

            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>

    </form>
@endsection
