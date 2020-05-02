@extends('layouts.backend')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">News</h1>
        <a class="btn btn-primary" href="{{ route('admin.news.create') }}">Add News</a>
    </div>

    @if($news->count())
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($news as $new)
                        <tr>
                            <td>{{ $new->id }}</td>
                            <td>{{ $new->user->name }}</td>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->created_at->diffForHumans() }}</td>
                            <td class="d-flex">
                                <a href="{{ route('admin.news.edit', $new) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a role="button" href="#"  data-toggle="modal" data-target="#news{{ $new->id }}Modal" class="btn btn-danger btn-sm ml-3">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @include('partials.modals.delete-news', $new);
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="font-weight-bold">Be the firt one to tell farmers something, through this site</p>
    @endif

@endsection
