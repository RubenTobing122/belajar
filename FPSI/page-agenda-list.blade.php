@extends('theme.' . $theme . '.template')

@section('content')
@foreach ($posts['items'] as $item)
  <div><a href="{{ $item->slug }}">{{ $item->title }}</a></div>
@endforeach
@endsection