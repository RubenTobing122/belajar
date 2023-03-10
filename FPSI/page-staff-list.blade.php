@inject('Str', 'Str')
@extends('theme.' . $theme . '.template')

@section('content')
@php
  $priority = array_map(fn($x) => Str::title($x),[__('dean\'s office'), __('head of study program'), __('head of laboratory'), __('lecturer')]);
  $items = collect($posts['items']);
  $groups = $items->groupBy(fn($x) => $x->content->position);
@endphp

@foreach ($priority as $group_key)
  @if (isset($groups[$group_key]))
  <h2 class="lined-title mt-5"><span>{{ $group_key }}</span></h2>
    <div class="container-xl lecturer-member-list column-2">
        @php
          $groups[$group_key] = $groups[$group_key]->sortBy(fn($x) => $x->content->priority_number);
        @endphp
        @foreach ($groups[$group_key] as $item)
          <div class="member">
            <div>
              <div class="hoverable-profile-picture">
                <img src="{{ $item->content->profile_picture }}">
              </div>
            </div>
            <div class="member-info">
              <strong>{{ $item->content->name }}</strong>
              <div>{{ $item->content->rank }}</div>
              <div class="mt-auto">
                  <a class="button button-secondary" href="{{ url("$lang/" . __('lecturer') . "/{$item->slug}") }}">Lihat Profil</a>
              </div>
            </div>
          </div>
        @endforeach
    </div> 
  @endif
@endforeach
@endsection