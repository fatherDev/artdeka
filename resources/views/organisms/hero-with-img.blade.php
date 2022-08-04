<section data-scroll-section class="l-section l-hero-with-img">
  <div class="l-hero-with-img__inner">
    <div class="overflow-hidden">
      <h2 data-scroll class="l-hero-with-img__title h-xl t-font-secondary t-upper">
        @if ($ACF['title'] !== '')
          {!! $ACF['title'] !!}
        @else
          {!! get_the_title() !!}
        @endif
      </h2>
    </div>
    <div data-scroll class="l-hero-with-img__img-wrapper">
      <img class="l-hero-with-img__img" src="{{ $ACF['img']['url'] ?? '' }}" alt="">
      <div class="cover hero-cover"></div>
    </div>
  </div>
</section>
