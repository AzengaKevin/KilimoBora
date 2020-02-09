@extends('layouts.app')

@section('content')

    <div class="container pt-4">
        <h4>Create Category</h4>

        <form action="{{ route('categories.store') }}" method="post">
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
                <small id="nameHelp" class="form-text text-muted">A simple and clear name of a section of general
                    concern</small>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control  @error('description') is-invalid @enderror" id="description"
                          name="description"
                          aria-describedby="descriptionHelp"
                          rows="3">{{ old('description') }}</textarea>
                @error('description')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small id="descriptionHelp" class="form-text text-muted">A verbose description of the category in
                    question for new members to understand</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
