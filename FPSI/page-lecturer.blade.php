@extends('theme.' . $theme . '.template')

@section('content')
<article class='container-xl'>
  <div class='lecturer-container'>
    <aside class='person'>
      <div class='d-flex'>
        <img src='{{ $post->content->profile_picture }}' />
      </div>
      <ul class='contact'>
        @foreach ($post->content->contacts as $contact)
          <li>
            <a href='{{ $contact->value }}'>{{ $contact->label }}: {{ $contact->value }}</a>
          </li>
        @endforeach
      </ul>
    </aside>
    <div class='profile-sections'>
      <section class='name'>
        <h3>{{ $post->content->name }}</h3>
        <small>{{ $post->content->rank }}</small>
        <p class='mt-2'>
          <q>{{ $post->content->motto }}</q>
        </p>
      </section>
      <section>
        <h2>{{ ucfirst(__('biography')) }}</h2>
        <div>
          <p>{{ $post->content->profile }}</p>
        </div>
      </section>
      <section>
        <h2>{{ ucfirst(__('publications')) }}</h2>
        <dl>
          @foreach ($post->content->selected_publications as $item)
            <dt>{{ $item->title }}</dt>
            <dd>
              <div>{{ $item->participants }}</div>
              <div>{{ $item->paper }}</div>
            </dd>    
          @endforeach
        </dl>
        <ul class='research-profiles'>
        @foreach($post->content->other_profiles as $name => $link)
            <li>
              <a href='{{  $link}}'>{{ $name }}</a>
            </li>
          @endforeach
        </ul>

      </section>
      <section>
        <h2>{{ ucfirst(__('research')) }}</h2>
        <dl>
          @foreach ($post->content->researches as $item)
            <dt>{{ $item->title }}</dt>
            <dd>
              <div>{{ ucfirst(__('scheme')) }}: {{ $item->scheme }}</div>
              <div>{{ ucfirst(__('position')) }}: {{ $item->position }}</div>
              <div>{{ ucfirst(__('status')) }}: {{ $item->status }}</div>
              <div>{{ ucfirst(__('year')) }}: {{ $item->year }}</div>
              <div>{{ ucfirst(__('source')) }}: {{ $item->source }}</div>
            </dd>    
          @endforeach
        </dl>
      </section>
      <section>
        <h2>{{ ucwords (__('community services')) }}</h2>
        <dl>
          @foreach ($post->content->community_services as $item)
            <dt>{{ $item->title }}</dt>
            <dd>
              <div>{{ ucfirst(__('scheme')) }}: {{ $item->scheme }}</div>
              <div>{{ ucfirst(__('position')) }}: {{ $item->position }}</div>
              <div>{{ ucfirst(__('status')) }}: {{ $item->status }}</div>
              <div>{{ ucfirst(__('year')) }}: {{ $item->year }}</div>
              <div>{{ ucfirst(__('source')) }}: {{ $item->source }}</div>
            </dd>    
          @endforeach
        </dl>
      </section>
      <section>
        <h2>{{ ucfirst(__('research areas')) }}</h2>
        <ul class='skill-list'>
          @foreach ($post->content->research_areas as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </section>
    </div>
  </div>
</article>
@endsection