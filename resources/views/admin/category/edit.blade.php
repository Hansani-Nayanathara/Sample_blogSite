@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">



<div class="card mt-4">
    <div class="card-header">
        <h4>Edit Category</h4>
    </div>
    <div class="card-body">

@if ($errors->any())
<div class="alert alert-danger">
@foreach ($errors->all() as $error )
<div>{{ $error }}</div>
@endforeach
</div>

@endif
<form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label>Category name: </label>
    <input type="text" name="name" value="{{ $category->name }}" class="form-control">

</div>
<div class="mb-3">
    <label>Slug: </label>
    <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">

</div>
<div class="mb-3">
    <label>Description: </label>
    <textarea name="description" rows="5" class="form-control">
        {{ $category->description }}</textarea>
</div>
<div class="mb-3">
    <label>image: </label>
    <input type="file" name="image" class="form-control">
    @if ($category->image)
        <img src="{{ asset('uploads/category/' . $category->image) }}" width="100" height="100" alt="{{ $category->name }}">
    @endif
</div>
<h6>SEO Tags</h6>
<div class="mb-3">
    <label>Meta title: </label>
    <input type="text" name="meta_title" value="{{ $category->meta_title }}" class="form-control">
</div>
<div class="mb-3">
    <label>Meta Description: </label>
    <textarea name="meta_description" rows="3" class="form-control">
        {{ $category->meta_description }}
    </textarea>
</div>
<div class="mb-3">
    <label>Meta Keywords: </label>
    <textarea name="meta_keyword" rows="3" class="form-control">{{ $category->meta_keyword }}</textarea>
</div>

<h6>Status Mode</h6>
<div class="col-md-3 mb-3">
    <label>Navbar status: </label>
    <input type="checkbox" name="navbar_status" {{ $category->navbar_status ? 'checked' : '' }}>
</div>
<div class="col-md-3 mb-3">
    <label>Status: </label>
    <input type="checkbox" name="status" {{ $category->status ? 'checked' : '' }}>
</div>

<div class="col-md-6">
    <button type="submit" class="btn btn-primary">Save Category</button>
</div>



        </form>

    </div>
</div>
</div>
@endsection
