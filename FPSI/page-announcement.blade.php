@extends('theme.' . $theme . '.template')
@inject('carbon', 'Carbon\Carbon')
@section('content')
<article>
<header class="post-page-header">
    <div class="container">
      <div class="header-wrapper">
        <div class="date">
          {!! (new $carbon)->create($post->published_at)->locale($lang)->isoFormat('<\div c\l\a\s\s="\d\at\e-nu\m">DD</\div><\div c\l\a\s\s="\mont\h">MMM</\div>') !!}
        </div>
        <div>
          <h1 class="post-title">{{ $post->title }}</h1>
          <div class="post-metadata mt-3">
            {{ __('by') }} {{ $post->writer ? $post->writer->name : __('anomymous') }} 
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container mt-5">
    <div class="content mb-5">
      <img class="w-100 mb-5" src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
      <div class="detail-postingan">
      {{ $post->excerpt }}
      </div>
        @if(is_object($post) && $post->content->annoucement) 
        <object data="{{ $post->content->annoucement}}" type="application/pdf" width="100%" style="min-height:500px">
      <p>Alternative text - include a link <a href="{{ $post->content->annoucement}}">to the PDF!</a></p>
        </object> 
        @endif
    </div>
  </div>
</article>
@endsection