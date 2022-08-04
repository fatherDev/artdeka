@php
global $post;
$hero = $fields['hero']['hero_with_img'] ?? '';
$textBlock = $fields['text'] ?? '';
@endphp

@extends('layouts.app')

@section('content')

  @include('organisms.hero-with-img', ['ACF' => $hero])
  @include('organisms.text-block', ['ACF' => $textBlock])
  @include('organisms.masonry')

@endsection
