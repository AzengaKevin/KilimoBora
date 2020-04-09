@extends('layouts.backend')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Events</h1>
        <a class="btn btn-primary" href="{{ route('admin.events.create') }}">Add Event</a>
    </div>

    @if($events->count())
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Venue</th>
                        <th>When</th>
                        <th>Image</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title}}</td>
                            <td>{{ $event->venue }}</td>
                            <td>{{ $event->when }}</td>
                            <td><img src="{{ asset($event->imageUrl()) }}" width="96" alt="Event Image"></td>
                            <td>{{ $event->created_at->diffForHumans() }}</td>
                            <td class="d-flex">
                                <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.events.edit', $event) }}" method="post">
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
        <p class="font-weight-bold">Post your first event to the site users</p>
    @endif

@endsection