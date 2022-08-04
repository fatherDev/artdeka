@php
$aboutContent = $fields['about_content'] ?? '';
@endphp

<div data-scroll-section class="l-about-text">
  <div class="l-about-text__inner">
    <div class="l-big-img__col">
      <p class="l-big-img__desc reveal-text">{!! $aboutContent['about_block_text'] ?? '' !!}</p>
    </div>
    <div class="l-big-img__col">
      <p class="h-lg t-font-secondary t-upper reveal-text">{{ $aboutContent['about_title'] ?? '' }}</p>
    </div>
  </div>
</div>
