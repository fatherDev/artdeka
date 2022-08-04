@extends('layouts.app')

@section('content')
    @include('molecules.page-header')

    @if (!have_posts())
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php(the_post())
        @includeFirst(['components.content-' . get_post_type(), 'components.content'])
    @endwhile

    {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
    @include('molecules.sidebar')
@endsection
