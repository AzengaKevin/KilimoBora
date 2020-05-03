@extends('layouts.backend')

@section('page', 'Edit Member ' . $member->name)

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h3 mb-0 text-gray-800">Edit Member</h4>
    </div>
        
    <form method="post" action="{{ route('admin.members.update', $member) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ old('name') ?? $member->name }}" aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">Name of the member</small>
            @error('name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ old('title') ?? $member->title }}" aria-describedby="titleHelp">
            <small id="titleHelp" class="form-text text-muted">Position that the member holds</small>
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook"
            value="{{ old('facebook') ?? $member->facebook }}" aria-describedby="facebookHelp">
            <small id="facebookHelp" class="form-text text-muted">Facebook link for the member in question<small>
            @error('facebook')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter"
            value="{{ old('twitter') ?? $member->twitter }}" aria-describedby="twitterHelp">
            <small id="twitterHelp" class="form-text text-muted">Twitter link for the member in question</small>
            @error('twitter')
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