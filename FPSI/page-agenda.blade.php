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
          {{ (new $carbon)->create($post->published_at)->locale($lang)->isoFormat('DD MMMM YYYY') }}
          
        </div>
      </div>
    </div>
  </header>
  <div class="container mt-5">
    <div class="content mb-5">
      <img class="w-100 mb-5" src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
     <h6 class="ini-deskripsi"> {{ $post->excerpt }} </h6>

    </div>
  </div>
  <section class="academics1">
    <div class="container">
        <h1 class="lined-title">
            <span>{{__("Agenda Details")}}</span>
        </h1>
        <div class="academic-list1">
            <div class="academic1">
      <i class="fa-solid fa-calendar"></i>
                <h2>
                  {{__("Schedule of Activities")}}
                </h2>
                <p>
                  @php
                  $schedule = null;
                  if(count($post->content->schedules)){
                    $schedule = $post->content->schedules[count($post->content->schedules) - 1];
                    $start = (new $carbon($schedule[0]))->setTimeZone(config('app.timezone'))->locale($lang)->isoFormat('hh:mm A');
                    $finish = (new $carbon($schedule[1]))->setTimeZone(config('app.timezone'))->locale($lang)->isoFormat('hh:mm A');
                  }
                @endphp
                {{ $start ?? 'N/A' }} - {{ $finish ?? 'N/A'  }}
                </p>
            </div>
            <div class="academic1">
              <i class="fas fa-male"></i>
                <h2>
                  {{__("Important Persons")}}
                </h2>
                <p>
                  @foreach($post->content->important_persons as $person)
                 {{ $person }}
                @endforeach
                </p>
            </div>
            <div class="academic1">
            <i class="fa-solid fa-location-dot"></i> 
                <h2>
                  {{__("Location")}}
                </h2>
                <p>
                  {{ $post->content->location }}
                </p>
            </div>
            <div class="academic1">
            <i class="fas fa-file"></i>
                <h2>
                  {{__("Main Topic")}}
                </h2>
                <p>
                  {{ $post->content->main_topic}}
                </p>
            </div>
        </div>
    </div>
</section>
</article>



{{-- <pre>{{ print_r($post) }}</pre> --}}

@endsection