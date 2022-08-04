@php
$bigImg = $fields['big_img'] ?? '';
@endphp

<div data-scroll-section class="l-big-img">
  <div class="sticky-wrapper" id="sticky">
    <div data-scroll data-scroll-sticky data-scroll-target="#sticky" class="sticky-container">
      <img data-scroll src="{{ $bigImg['img1']['url'] ?? '' }}" alt="" class="pin pin--1">
      <img data-scroll data-scroll-offset="100%" src="{{ $bigImg['img2']['url'] ?? '' }}" alt=""
        class="pin pin--2">
      <img data-scroll data-scroll-offset="150%" src="{{ $bigImg['img3']['url'] ?? '' }}" alt=""
        class="pin pin--3">
      <img src="{{ $bigImg['img3']['url'] ?? '' }}" alt="" class="c-mobile-img">
    </div>
  </div>
</div>
<div data-scroll-section class="l-big-img">
  <div class="l-big-img__inner">
    <img class="l-big-img__accent" src="@asset('/images/logo-sygnet.svg')" alt="">
    <div class="l-big-img__col">
      <p class="l-big-img__desc reveal-text">{!! $bigImg['text_block'] ?? '' !!}</p>
    </div>
    <div class="l-big-img__col">
      <p class="h-lg t-font-secondary t-upper reveal-text">{{ $bigImg['title'] ?? '' }}</p>
    </div>
  </div>
</div>
