@extends('layouts.apps')

@section('content')
    <h4>Welcome {{ Auth::user()->role }} {{ Auth::user()->company }}</h4>

    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->company }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
