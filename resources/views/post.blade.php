this is a post.blade.php file
</br>
@foreach($posts as $post )

<div>title</div>
<div>{{$post->title}}</div>
<div>content</div>
<div>{{$post->content}}</div>
<div>likes</div>
<div>{{$post->likes}}</div>
</br>
@endforeach
