@extends('layouts.app')

@section('page', 'Create Post')

@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Create Post</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('posts.index') }}">
                            <i class="fa fa-comment"></i> Forum
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Post</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container pt-4">

        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                       value="{{ old('title') }}" aria-describedby="titleHelp">
                <small id="titleHelp" class="form-text text-muted">Choose a captivating title for your viewers</small>
                @error('title')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body"
                          aria-describedby="bodyHelp">{{ old('body') }}</textarea>
                <small id="bodyHelp" class="form-text text-muted">Write all the crap your want to say here</small>
                @error('body')
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
                            value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
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

            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Select Image</label>
                </div>
            </div>

            <div class="clearfix my-3">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('custom-script')
    <script>
        $('#image').on('change', function () {
            let fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection
