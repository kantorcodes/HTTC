<article class="type-system-geometric">
  <h1>{!! $post->title !!}</h1>
  <h2>{!! $post->subtitle !!}</h2>

  <p class="date">
   {!! $post->created_at !!}</p>
 
  <p>
     @if(isset($isPost))
     {!! $post->value !!}
     @else
  	{!! $post->summary !!}
   	@endif
  </p>
  <p>
  @if(!isset($isPost))
  <a href="{{ route('blog.post',['slug' => $post->slug]) }}">
<i class="fa fa-long-arrow-right"></i>
  Read More</a>
  @endif
  </p>
<div>
  @foreach($post->tags as $tag)

	<span class="badge-success">{!! $tag->name !!}</span>
  @endforeach
 </div>
  <p class="author">Written By - {!! $post->author !!}</p>
</article>