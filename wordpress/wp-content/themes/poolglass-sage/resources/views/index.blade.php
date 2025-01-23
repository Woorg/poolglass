@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    @php
      wp_redirect(home_url('/404/')); // Replace with your custom 404
    @endphp
  @endif

  @while (have_posts())
    @php(the_post())
    @includeFirst([
        'partials.content-' . get_post_type(),
        'partials.content',
    ])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
