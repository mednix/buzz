<?php


namespace Buzz\Core;


class Post
{
    private $title;
    private $image;
    private $id;

    public function __construct($title, $image)
    {
        $this->id=rand(1, 10000000);
        $this->title = $title;
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        
    }

    public function getContent()
    {
        return 'lorem ipsum dolor mit';
    }
    public function getImage()
    {
        return new Image($this->image);
    }

    public function setImage($image)
    {
        $this->image=$image;
    }

    public function getTopic()
    {
        return new Topic('cui', 'cuisine');
    }

    public function publishedAt()
    {
        
    }

    public function publish()
    {

    }

    public function publishAt($date)
    {

    }

    public function isPublished()
    {

    }
}