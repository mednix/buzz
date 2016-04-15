<?php


namespace Buzz\Core;


class Image
{
    private $source;

    public function __construct($source)
    {

        $this->source = $source;
    }

    public static function fromPath()
    {

    }

    public static function fromUrl()
    {

    }

    public function getUrl()
    {
        return $this->source;
    }

    public function getPath()
    {

    }
}