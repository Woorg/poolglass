@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    @includeFirst([
        'partials.content-' . get_post_type(),
        'partials.content',
    ])
  @endwhile
@endsection

@section('footer_scripts')
  <script type="module" src="{!! Vite::asset('resources/assets/scripts/pages/front-page.ts') !!}"></script>
@endsection
