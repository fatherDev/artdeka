@php
$hero = $fields['hero'] ?? '';
$slidesCount = 1;
@endphp

<section data-scroll-section class="l-section l-hero">
  <div class="swiper hero-swiper">
    <div class="swiper-wrapper">

      @foreach ($hero['hero_slider'] as $item)
        <div class="swiper-slide c-hero-slide">
          <div class="c-hero-slide__col--left">
            <p class="h-xs t-upper c-hero-slide__label">wnętrza dopasowane do</p>
            <div class="c-hero-slide__inner">
              <div class="overflow-hidden title">
                <h2 class="h-xl t-font-secondary c-hero-slide__title t-upper">{{ $item['title'] ?? '' }}</h2>
              </div>
              <span class="c-hero-slide__counter t-font-secondary">0{{ $slidesCount }}</span>
            </div>
            <div class="overflow-hidden">
              <p class="c-hero-slide__text">{!! $item['text_block'] ?? '' !!}</p>
            </div>
            <a href="{{ $item['link']['url'] }}" class="c-hero-slide__link c-line-btn">
              {{ $item['link']['title'] }}
            </a>
          </div>
          <div class="c-hero-slide__col--right">
            <figure class="c-hero-slide__img">
              <picture>
                <img src="{{ $item['img']['url'] }}" alt="">
              </picture>
            </figure>
          </div>
        </div>

        @php
          $slidesCount += 1;
        @endphp
      @endforeach

    </div>
    <div data-scroll class="hero-pagination__wrapper">
      <div class="hero-pagination"></div>
    </div>
  </div>
</section>
