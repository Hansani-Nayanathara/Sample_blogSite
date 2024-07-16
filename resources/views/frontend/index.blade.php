@extends('layouts.app')
@section('content')

@section('title',"blogging")
@section('meta_description',"blogging")
@section('meta_keyword',"blogging")

<div class="bg-danger py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">

                    @foreach ($all_categories as $all_cate_item)


                    <div class="item">
                        <a href="{{ url('tutorial/'.$all_cate_item->slug) }}" class="text-decoration-none"></a>
                        <div class="card">
                            <img src="{{ asset('uploads/category/'.$all_cate_item->image ) }}" calt="image" width="250px" height="250px">
                            <div class="card-body text-center">
                                <h4 class="text-dark">{{ $all_cate_item->name }}</h4>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <!-- Add more items as needed -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-1 bg-gray" >
    <div class="container">
        <div class="border text-center p-3">
            <h3>Advertise here</h3>
        </div>
    </div>
</div>

<div class="py-4 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All categories list</h4>
                <div class="underline">
                    @foreach ($all_categories as $all_cateitem)
                    <div class="col-md-3">
                        <div class="card card-body mb-3">
                            <a href="{{ url('tutorial/'.$all_cateitem->slug) }}" class="text-decoration-none">
                            <h5 class="text-dark mb-0 ">{{ $all_cateitem->name }}</h5>
                        </a>
                        </div></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Post</h4>
                <div class="underline">
                    <div class="col-md-8">
                        @foreach ($latest_posts as $latest_post_item)
                            <div class="card card-body mb-3">
                                <a href="{{ url('tutorial/'.$latest_post_item->category->slug .'/'.$latest_post_item->slug) }}" class="text-decoration-none">
                                <h5 class="text-dark mb-0 ">{{ $latest_post_item->name }}</h5>
                                <h6>Posted On: {{ $latest_post_item->created_at->format('d-m-Y') }}</h6>
                            </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <div class="py-1 bg-gray" >
                            <div class="container">
                                <div class="border text-center p-3">
                                    <h3>Advertise here</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
