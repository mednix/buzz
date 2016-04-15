<div class="post">
    <div class="page-header">
        <h1><a href="/post/{{$post->getId()}}">{{$post->getTitle()}}</a></h1>
    </div>
    <a class="" href="/post/{{$post->getId()}}">
        <img src="{{$post->getImage()->getUrl()}}" alt="">
    </a>
</div>
