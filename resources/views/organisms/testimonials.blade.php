@php
$testimonials = $fields['testimonials'] ?? '';
@endphp

<section data-scroll-section class="l-testimonials">
  <div class="l-testimonials__inner">
    <p class="h-lg t-upper t-font-secondary reveal-text l-testimonials__title">Opinie</p>

    <div data-scroll data-scroll-offset="30%" class="l-testimonials__inner-wrapper">
      <div class="button-wrapper button-wrapper--left">
        <button class="testimonials-button-prev c-main-btn">
          <span class="current">
            @include('icon::arrow')
          </span>
          <span class="before">
            @include('icon::arrow')
          </span>
        </button>
      </div>

      <div class="swiper testimonials-swiper">
        <div class="swiper-wrapper">
          @foreach ($testimonials as $item)
            <div class="swiper-slide c-testimonials-slide">
              <p class="c-testimonials-slide__content">{!! $item['testimonial'] ?? '' !!}</p>
              <p class="t-font-secondary c-testimonials-slide__name">{!! $item['name'] ?? '' !!}</p>
            </div>
          @endforeach
        </div>
        <div class="swiper-pagination testimonials-pagination"></div>
      </div>

      <div class="button-wrapper button-wrapper--right">
        <button class="testimonials-button-next c-main-btn">
          <span class="current">
            @include('icon::arrow')
          </span>
          <span class="before">
            @include('icon::arrow')
          </span>
        </button>
      </div>
    </div>
  </div>
</section>
