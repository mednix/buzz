<?php

namespace App\Http\Controllers;


use Buzz\Core\PostRepository;
use Buzz\Core\TopicRepository;

class BuzzController extends Controller
{
    public function index()
    {
        $posts=PostRepository::getAll();
        $topics=TopicRepository::getAll();
        return view('index', compact('posts','topics'));
    }

    public function post($id)
    {
        $topics=TopicRepository::getAll();
        $post=PostRepository::getById($id);
        return view('post', compact('post', 'topics'));
    }
}