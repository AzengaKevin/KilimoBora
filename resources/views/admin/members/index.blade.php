@extends('layouts.backend')

@section('page', 'Team Members')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Team Members</h1>
        <a class="btn btn-primary" href="{{ route('admin.members.create') }}">Add Member</a>
    </div>

    @if($members->count())
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Facebook Link</th>
                        <th>Twitter Link</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name}}</td>
                            <td><img src="{{ asset($member->imageUrl()) }}" width="96" alt="Member Image"></td>
                            <td>{{ $member->title}}</td>
                            <td>{{ $member->facebook }}</td>
                            <td>{{ $member->twitter }}</td>
                            <td class="d-flex">
                                <a href="{{ route('admin.members.edit', $member) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a role="button" href="#"  data-toggle="modal" data-target="#member{{ $member->id }}Modal" class="btn btn-danger btn-sm ml-3">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @include('partials.modals.delete-member', $member)
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="font-weight-bold">No member added yet</p>
    @endif

@endsection
