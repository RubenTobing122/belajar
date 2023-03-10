@extends('theme.' . $theme . '.template')

@section('content')
<article>
  {!! $post->content !!}
</article>
@endsection