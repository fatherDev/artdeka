@extends('layouts.app')

@section('content')
    @while (have_posts()) @php(the_post())
        @include('molecules.page-header')
        @includeFirst(['molecules.content-page', 'molecules.content'])
    @endwhile
@endsection
