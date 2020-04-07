@extends('layouts.app')

@section('page', 'Carousel Sliders')

@section('content')

    <div class="container pt-4">

        <div class="d-flex justify-content-between">
            <h4>Carousel Sliders</h4>
            <a href="{{ route('admin.carousels.create') }}">Add Slider</a>
        </div>

        @if($carousels->count())
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Button Url</th>
                        <th>Button Text</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($carousels as $carousel)
                        <tr>
                            <td>{{ $carousel->id }}</td>
                            <td>{{ $carousel->title }}</td>
                            <td>{{ $carousel->description }}</td>
                            <td>{{ $carousel->button_url }}</td>
                            <td>{{ $carousel->button_text }}</td>
                            <td><img src="{{ asset($carousel->imageUrl()) }}" width="96" alt="Carousel Image"></td>
                            <td class="d-flex">
                                <a href="{{ route('admin.carousels.edit', $carousel) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.carousels.edit', $carousel) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ml-3">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="font-weight-bold">Better be adding some carousels</p>
    @endif
    </div>

@endsection
