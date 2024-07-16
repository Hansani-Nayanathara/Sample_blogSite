@extends('layouts.master')
@section('content')

<div class="container-fluid px-4"><br>
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Users
                <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Posts</a>
            </h4> </div>

    <div class="card-body">

        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
        <table id='myDataTable' class="table table = boarded">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->role_as=='1' ? 'Admin':'User'}}</td>
                    <td>
                        <a href="{{ url('admin/edit-users/' . $item->id) }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div></div>
</div>

@endsection
