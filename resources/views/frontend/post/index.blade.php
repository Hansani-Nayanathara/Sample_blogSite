@extends('layouts.app')


@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="category-heading">
                    <h4>{{ $category->name }}</h4>
                </div>

                @forelse ($post as $postitem)
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                        <a href="{{ url('tutorials/'.$category->slug.'/'.$postitem->slug )}}" class="text-decoration-none">
                        <h2>{{ $postitem->name }}</h2>
                    </a>
                    <h6>Posted On: {{ $postitem->created_at->format('d-m-Y') }}</h6>
                    <span class="ms-3">
                        Posted By: {{ $postitem->user->name }}
                    </span>
                    </div>

                </div>

                @empty
                <div class="card card-shadow mt-4">
                    <div>
                        <h2>No Post available</h2>
                    </div>
                </div>
                @endforelse
                <div class="your-paginate">
                    {{ $post->links() }}
                </div>
            </div>

            <div class="col-md-3">
                <div class="border p-2">
                    <h4>ADvertising area</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
