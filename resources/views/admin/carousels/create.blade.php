@extends('layouts.app')

@section('page', 'Add Carousel Slider')

@section('custom-script')
    <script>
        $('#image').on('change', function () {
            let fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection


@extends('layouts.app')

@section('content')

    <div class="container pt-4">
        <h4>Add Slider</h4>

        <form method="post" action="{{ route('admin.carousels.store') }}" enctype="multipart/form-data">
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
                <label for="description">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                       value="{{ old('description') }}" aria-describedby="descriptionHelp">
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
                       value="{{ old('button_text') }}" aria-describedby="button_textHelp">
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
                       value="{{ old('button_url') }}" aria-describedby="button_urlHelp">
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

            <div class="clearfix my-3 mb-5">
                <button type="submit" class="btn famie-btn float-right">Submit</button>
            </div>
        </form>
    </div>
@endsection

