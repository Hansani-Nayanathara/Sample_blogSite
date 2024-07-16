@extends('layouts.master')
@section('content')

<div class="container-fluid px-4"><br>
    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Posts
                <a href="{{ url('admin/add-posts') }}" class="btn btn-primary float-end">Back</a>
            </h4> </div>

    <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger">
        @foreach ($errors->all() as $error )
        <div>{{ $error }}</div>
        @endforeach
        </div>

        @endif


        <form action="{{ url('admin/update-post/'.$post->id) }}" method="POST">
@csrf
@method('PUT')
            <div class="mb-3">
                <label for="">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">--Select Category--</option>
                    @foreach ($category as $cateitem)
                    <option value="{{ $cateitem->id }}" {{ $post->category_id==$cateitem->id ? 'selected' : ''}}>
                        {{ $cateitem->name }}
                    </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label for="">Post name</label>
                <input type="text" name="name" value="{{ $post->name }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Slug</label>
                <input type="text" name="slug" value="{{ $post->slug }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Description</label>
                <textarea name="description" id="my_summernote" class="form-control" rows="4">{{ $post->description }} </textarea>
            </div>

            <div class="mb-3">
                <label for="">Youtube Iframe Link</label>
                <input type="text" name="yt_frame" value="{{ $post->yt_frame }}" class="form-control">
            </div>

            <h6>SEO Tags</h6><br>

            <div class="mb-3">
                <label>Meta title: </label>
                <input type="text" name="meta_title" value="{{ $post->meta_title }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Meta Description: </label>
                <textarea name="meta_description" rows="3" class="form-control">{{ $post->meta_description }}</textarea>
            </div>
            <div class="mb-3">
                <label>Meta Keywords: </label>
                <textarea name="meta_keyword" rows="3" class="form-control">{{ $post->meta_keyword}}</textarea>
            </div>

            <h6>Status Mode</h6><br>

            <div class="col-md-3 mb-3">
                <label>Status: </label>
                <input type="checkbox" name="status" value="{{ $post->status }}">
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Save Category</button>
            </div>

        </form>
    </div></div>
</div>

@endsection
