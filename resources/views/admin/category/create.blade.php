@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">



<div class="card mt-4">
    <div class="card-header">
        <h4>Add Category</h4>
    </div>
    <div class="card-body">

@if ($errors->any())
<div class="alert alert-danger">
@foreach ($errors->all() as $error )
<div>{{ $error }}</div>
@endforeach
</div>

@endif
        <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label>Category name: </label>
    <input type="text" name="name" class="form-control">

</div>
<div class="mb-3">
    <label>Slug: </label>
    <input type="text" name="slug" class="form-control">

</div>
<div class="mb-3">
    <label>Description: </label>
    <textarea name="description" id="my_summernote" rows="5" class="form-control">
    </textarea>
</div>
<div class="mb-3">
    <label>image: </label>
    <input type="file" name="image" required class="form-control">
</div>
<h6>SEO Tags</h6>
<div class="mb-3">
    <label>Meta title: </label>
    <input type="text" name="meta_title" class="form-control">
</div>
<div class="mb-3">
    <label>Meta Description: </label>
    <textarea name="meta_description" rows="3" class="form-control"></textarea>
</div>
<div class="mb-3">
    <label>Meta Keywords: </label>
    <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
</div>

<h6>Status Mode</h6>
<div class="col-md-3 mb-3">
    <label>Navbar status: </label>
    <input type="checkbox" name="navbar-status">
</div>
<div class="col-md-3 mb-3">
    <label>Status: </label>
    <input type="checkbox" name="status">
</div>

<div class="col-md-6">
    <button type="submit" class="btn btn-primary">Save Category</button>
</div>



        </form>

    </div>
</div>
</div>
@endsection
