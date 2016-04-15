<?php


namespace Buzz\Core;


class PostRepository
{
    public static function getById($id)
    {
        return new Post('Awesome image title', 'http://lorempixel.com/500/400?4');
    }

    public static function getAll()
    {
        return [new Post('Awesome image title', 'http://lorempixel.com/500/400?0'), new Post('Another Awesome image title','http://lorempixel.com/500/400?1')];
    }

    public static function paginate($number)
    {

    }

    public static function random()
    {
        $post=new Post('I like to take long walks on the beach', 'http://lorempixel.com/500/400?3');
        return $post;
    }


}