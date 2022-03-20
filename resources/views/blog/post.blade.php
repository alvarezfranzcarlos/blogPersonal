<h1>{{$post->title}}</h1>
<p>{{$post->content}}</p>

<p>{{count($post->likes)}} Likes
    <a href="{{ route('blog.post.like', ['id'=> $post->id]) }}"> Like</a>
</p>
