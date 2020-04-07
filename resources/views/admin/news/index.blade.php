@extends('layouts.app')

@section('content')

    <div class="container pt-4">

        <div class="d-flex justify-content-between">
            <h4>News</h4>
            <a href="{{ route('admin.news.create') }}">Add News</a>
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
                                <form action="{{ route('admin.news.edit', $new) }}" method="post">
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
        <p class="font-weight-bold">Be the firt one to tell farmers something, through this site</p>
    @endif
    </div>

@endsection
