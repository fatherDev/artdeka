@php
global $post;
$hero = $fields['about_hero']['hero_with_img'] ?? '';
@endphp

@extends('layouts.app')

@section('content')
  @include('organisms.hero-with-img', ['ACF' => $hero])
  @include('organisms.img-section')
  @include('organisms.img-text-block')
  @include('organisms.testimonials')
@endsection
