@extends('layouts.backend')


@section('content')

    <div class="d-flex justify-content-between pb-3">
        <h4>Contacts</h4>
    </div>

    @if($contacts->count())
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="post">
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
        <p class="font-weight-bold pt-2">No Contacts Made Yet</p>
    @endif

@endsection