@extends('layouts.backend')

@section('page', 'Edit News ' . $news->title)

@section('content')

    <h4>Edit News</h4>

    <form method="post" action="{{ route('admin.news.update', $news) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') ?? $news->title }}" aria-describedby="titleHelp">
            <small id="titleHelp" class="form-text text-muted">Choose a captivating title for your viewers</small>
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Body</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content"
                        aria-describedby="contentHelp">{{ old('content') ?? $news->content }}</textarea>
            <small id="contentHelp" class="form-text text-muted">What do you  wanna inform farmers about, type on...</small>
            @error('content')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select type="text" class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                    name="category_id" aria-describedby="category_idHelp">
                <option value="">Choose...</option>
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}" {{ ((old('category_id') ?? $news->category_id) == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            <small id="category_idHelp" class="form-text text-muted">Select the relevant Category for your
                post</small>
            @error('category_id')
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
                <small id="imageHelp" class="form-text text-muted">Choose an image to explain more about the news</small>
                @error('image')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>

        <div class="clearfix my-3 mb-5">
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
    </form>
@endsection

