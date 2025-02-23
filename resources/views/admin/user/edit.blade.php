@extends('layouts.master')
@section('content')

<div class="container-fluid px-4"><br>
    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Users
                <a href="{{ url('admin/users') }}" class="btn btn-primary float-end">Add Posts</a>
            </h4> </div>

    <div class="card-body">


    <div class="mb-3">
        <label for="">Full Name</label>
        <p class="form-control">{{ $user->name }}</p>
    </div>
    <div class="mb-3">
        <label for="">Email id</label>
        <p class="form-control">{{ $user->email }}</p>
    </div>
    <div class="mb-3">
        <label for="">Created at</label>
        <p class="form-control">{{ $user->created_at->format('d/m/Y') }}</p>
    </div>

<form action="{{ url('admin/update-user/'.$user->id) }}" class="mb-3" method="POST">
    @csrf
    @method('PUT')
    <label for="">Role as</label>
    <select name="role_as" class="form-control">
        <option value="1" {{ $user->role_as == '1' ? 'selected':'' }}>Admin</option>
        <option value="0" {{ $user->role_as == '0' ? 'selected':'' }}>User</option>
        <option value="2" {{ $user->role_as == '2' ? 'selected':'' }}>Blogger</option>
    </select>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update User Role</button>
    </div>
</form>




    </div></div>
</div>

@endsection
