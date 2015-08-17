<article class="type-system-geometric">
  <p class="type">Article Type</p>
  <h1>{!! $post->title !!}</h1>
  <h2>{!! $post->subtitle !!}</h2>

  <p class="date">{!! $post->created_at !!}</p>
  <p>
  {!! $post->value !!}
  </p>
 
  <p class="author">{!! $post->author !!}</p>
</article>