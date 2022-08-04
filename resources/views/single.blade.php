@extends('layouts.app')

@section('content')
    @while (have_posts()) @php(the_post())
        @includeFirst(['molecules.content-single-' . get_post_type(), 'molecules.content-single'])
    @endwhile
@endsection
