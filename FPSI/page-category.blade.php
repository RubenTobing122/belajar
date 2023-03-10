@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')

@section('content')
<article>
  <div class="category-page-header">
    <div class="container">
      <h1>{{ $category->name }}</h1>
      <h2>{{ ucfirst(__('category')) }}</h2>
    </div>
  </div>
  <div class="main-content container-xl my-5">
    <section class="posts-list">
      @foreach ($posts->data as $post)
        <div>
          <a href="{{ url("$lang/{$post->categories[0]->slug}/{$post->slug}") }}">
            <div class="hoverable-thumbnail">
              <img class="w-100" src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
            </div>
          </a>
          <div class="post-metadata">
            <div class="date">
              {!! (new $carbon)->create($post->published_at)->locale($lang)->isoFormat('<\div c\l\a\s\s="\d\at\e-nu\m">DD</\div><\div c\l\a\s\s="\mont\h">MMM</\div>') !!}
            </div>
            <div>
              <a href="{{ url("$lang/{$post->categories[0]->slug}/{$post->slug}") }}">
                <h3 class="post-title">{{ $post->title }}</h3>
              </a>
              <div class="metadata">
                {{ (new $carbon)->create($post->published_at)->locale($lang)->isoFormat('MMMM DD') }} &nbsp;
                / &nbsp;
                {{ __('by')}} {{ $post->writer ? $post->writer->name : __('anomymous') }} &nbsp;
                / &nbsp;
                {{ join(', ', array_map(fn($x) => $x->name, $post->categories)) }}
              </div>
            </div>
          </div>
          <p class="mb-5">
            {{ join(' ', array_slice(explode(' ', strip_tags($post->content). ' '), 0, 55)) }}...
          </p>
          <a class="button button-unit" href="{{ url("$lang/{$post->categories[0]->slug}/{$post->slug}") }}">
            Read More
          </a>
        </div>
      @endforeach
      <div class="d-flex gap-3">
        @if ($posts->current_page === 1)
          <button disabled class="button button-secondary">
            <i class="fa-solid fa-angle-left"></i>
          </button>
        @else
          @if($posts->current_page - 1 === 1)
            <a href="<?= url()->current() ?>" class="button button-secondary">
              <i class="fa-solid fa-angle-left"></i>
            </a>
          @else
            <a href="<?= url()->current() . '?page=' . ($posts->current_page - 1) ?>" class="button button-secondary">
              <i class="fa-solid fa-angle-left"></i>
            </a>
          @endif
        @endif

        @if ($posts->current_page === $posts->last_page)
          <button disabled class="button button-secondary">
            <i class="fa-solid fa-angle-right"></i>
          </button>
        @else
          <a href="<?= url()->current() . '?page=' . ($posts->current_page + 1) ?>" class="button button-secondary">
            <i class="fa-solid fa-angle-right"></i>
          </a>
        @endif
      </div>
    </section>
    <aside class="other-stuff">
      <section class="section-table">
        <h5 class="table-header">
          {{ ucwords(__('recent posts')) }}
        </h5>
        <ul class="list">
          @foreach ($recent_posts as $post)
            <li class="list-item">
              <a href="{{ url("$lang/{$post->categories[0]->slug}/{$post->slug}") }}">
                {{ $post->title }}
              </a>
            </li>
          @endforeach
        </ul>
      </section>
      
      <section class="section-table">
        <h5 class="table-header">
          {{ ucwords(__('archieves')) }}
        </h5>
        <ul class="list">
          @foreach ($archieves as $archieve)
            <li class="list-item">
              <a href="{{ url("$lang/{$archieve->year}/{$archieve->month}") }}">
                {{ $carbon::create($archieve->year, $archieve->month)->isoFormat('MMMM YYYY') }}
              </a>
            </li>
          @endforeach
        </ul>
      </section>

      <section class="section-table">
        <h5 class="table-header">
          {{ ucwords(__('other categories')) }}
        </h5>
        <ul class="list">
          @foreach ($categories as $category)
            <li class="list-item">
              <a href="{{ url("$lang/" . __("category") . "/{$category->slug}") }}">
                {{ $category->name }}
              </a>
            </li>
          @endforeach
        </ul>
      </section>
    </aside>
  </div>
</article>
@endsection