@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')

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
            / 
            {!! join(', ', array_map(fn($x) => "<a href=\"" . url("$lang/" . __('category') . "/$x->slug") .  "\">$x->name</a>", $post->categories)) !!}
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container mt-5">
    <div class="content mb-5">
      <img class="w-100 mb-5" src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
    
      <div class="detail-postingan">
             {!! $post->content !!}
        </div>
      <nav class="post-navigation">
        @if ($post->prev_post)
          <a href="{{ $post->prev_post->url }}">
            <i class="fa-solid fa-left-long"></i>&nbsp; &nbsp;
            {{ ucfirst(__('prev')) }}
          </a>
        @else
          <span></span>
        @endif
        
        @if ($post->next_post)
          <a href="{{ $post->next_post->url }}">
            {{ ucfirst(__('next')) }}&nbsp; &nbsp;
            <i class="fa-solid fa-right-long"></i>
          </a>
        @else
          <span></span>
        @endif
      </nav>
    </div>
  </div>
</article>
@endsection


