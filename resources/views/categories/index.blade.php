@extends('layouts.app')

@section('content')

    <div class="container pt-4">

        <div class="d-flex justify-content-between">
            <h4>Categories</h4>
            <a href="{{ route('categories.create') }}">New Category</a>
        </div>

        @if($categories->count())
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td class="d-flex">
                                <a href="{{ route('categories.show', $category) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>

                                <form action="{{ route('categories.destroy', $category) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm ml-2">
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
            <p class="font-weight-bold pt-2">No Categories Added Yet</p>
        @endif
    </div>

@endsection
