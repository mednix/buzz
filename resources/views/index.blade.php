@extends('layouts.master')
@section('body')
    @include('common.header')
    @include('common.welcome_banner', ['post'=>Buzz\Core\PostRepository::random()])
    <div class="container">
        <div class="row">
            @include('posts.post_list')
        </div>
    </div>




    @include('common.footer')
@endsection