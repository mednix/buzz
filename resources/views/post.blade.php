@extends('layouts.master')
@section('body')
    @include('topics.topic_list')
    @include('common.topic_banner')
    <div class="container">
        <div class="row">
            @include('posts.post_details', ['post'=>$post])
        </div>
    </div>
    @include('common.footer')
@endsection