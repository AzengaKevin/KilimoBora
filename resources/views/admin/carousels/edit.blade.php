@extends('layouts.backend')

@section('page', 'Edit Carousel Slider ' . $carousel->title)

@section('title', 'Add Carousel Slider')

@section('content')
    <form method="post" action="{{ route('admin.carousels.update', $carousel) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') ?? $carousel->title }}" aria-describedby="titleHelp">
            <small id="titleHelp" class="form-text text-muted">Choose a captivating title for your viewers</small>
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea cols="10" rows="5"class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    aria-describedby="descriptionHelp" >{{ old('description') ?? $carousel->description }}</textarea>
            <small id="descriptionHelp" class="form-text text-muted">Choose a captivating description for your viewers</small>
            @error('description')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="button_text">Button Text</label>
            <input type="text" class="form-control @error('button_text') is-invalid @enderror" id="button_text" name="button_text"
                    value="{{ old('button_text') ?? $carousel->button_text }}" aria-describedby="button_textHelp">
            <small id="button_textHelp" class="form-text text-muted">A relevant redirection please</small>
            @error('button_text')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="button_url">Button URL</label>
            <input type="text" class="form-control @error('button_url') is-invalid @enderror" id="button_url" name="button_url"
                    value="{{ old('button_url') ?? $carousel->button_url }}" aria-describedby="button_urlHelp">
            <small id="button_urlHelp" class="form-text text-muted">Redirection URL based on the above text</small>
            @error('button_url')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" aria-describedby="imageHelp" name="image" id="image">
                <label class="custom-file-label" for="image">Select Image</label>
            </div>
            <div>
                <small id="imageHelp" class="form-text text-muted">Select and elegant image for your carousel please</small>
                @error('image')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>

        <div class="clearfix py-3">
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
    </form>
@endsection

