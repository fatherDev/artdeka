@php
global $post;
$hero = $fields['offer_hero']['hero_with_img'] ?? '';
$offerTextBlock = $fields['offer_text_block']['text'] ?? '';
$offerTextBlockCopy = $fields['offer_text_block_copy']['text'] ?? '';
@endphp

@extends('layouts.app')

@section('content')
  @include('organisms.hero-with-img', ['ACF' => $hero])
  {{-- @include('organisms.sliding-images') --}}
  @include('organisms.text-block', ['ACF' => $offerTextBlock])
  @include('organisms.offer')
  @include('organisms.stages')
  @include('organisms.example')
  {{-- @include('organisms.text-block', ['ACF' => $offerTextBlockCopy, 'class' => 'l-text-block--right-accent']) --}}
@endsection
