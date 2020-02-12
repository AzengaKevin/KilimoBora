@extends('layouts.app')

@section('content')

    <div class="container pt-4">
        <h4>Category Details</h4>

        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm mb-2">Back</a>

        <table class="table">
            <tr>
                <td>Name</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{ $category->description }}</td>
            </tr>
        </table>

        <div class="d-flex justify-content-end py-3">
            <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
@endsection
