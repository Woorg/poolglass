@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    @if (is_404())
      @php
        wp_redirect(home_url('/404/')); // Replace with your custom 404
      @endphp
    @endif
  @endif
@endsection
