@extends('layouts.backend')

@section('page', 'Add Event')

@section('custom-script')
    <script>
        $('#image').on('change', function () {
            let fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection



@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Event</h1>
    </div>
        
    <form method="post" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ old('title') }}" aria-describedby="titleHelp">
            <small id="titleHelp" class="form-text text-muted">A title for an approaching event</small>
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="5" cols="10"
            aria-describedby="contentHelp">{{ old('content') }}</textarea>
            <small id="contentHelp" class="form-text text-muted">Say somthing cool about the event, it's benefits and what have you, state date and time</small>
            @error('content')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="venue">Venue</label>
            <input type="text" class="form-control @error('venue') is-invalid @enderror" id="venue" name="venue"
            value="{{ old('venue') }}" aria-describedby="venueHelp">
            <small id="venueHelp" class="form-text text-muted">Where will the event be held, clear precise location</small>
            @error('venue')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="when">When Will it be ?</label>
            <input type="date" class="form-control @error('when') is-invalid @enderror" id="when" name="when"
            value="{{ old('when') }}" aria-describedby="whenHelp">
            <small id="whenHelp" class="form-text text-muted">Date for the event</small>
            @error('when')
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