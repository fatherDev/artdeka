@php
$homeGallery = $fields['home_gallery'] ?? '';
$galleryTitle = $fields['gallery_title'] ?? '';
@endphp

<section data-scroll-section class="l-section l-gallery">
  <p class="h-lg t-font-secondary l-gallery__title reveal-text">{{ $galleryTitle ?? '' }}</p>
  <div class="l-gallery__inner">
    <div class="button-wrapper button-wrapper--left">
      <button class="gallery-button-prev c-main-btn">
        <span class="current">
          @include('icon::arrow')
        </span>
        <span class="before">
          @include('icon::arrow')
        </span>
      </button>
    </div>

    <div class="home-gallery-swiper__wrapper">
      <div data-scroll data-scroll-offset="35%" class="home-gallery-swiper__inner-wrapper">
        <div class="swiper home-gallery-swiper">
          <div class="swiper-wrapper">

            @forelse ($homeGallery as $item)
              <div class="swiper-slide c-gallery-slide">
                <div class="c-gallery-slide__inner">
                  <img src="{{ $item['url'] }}" alt="">
                </div>
              </div>
            @empty
            @endforelse
          </div>
        </div>
        <div class="cover"></div>
      </div>
      <div class="gallery-pagination__wrapper">
        <div class="gallery-pagination"></div>
        <div class="gallery-pagination-total">/<span class="total-number">{{ count($homeGallery) }}</span>
        </div>
      </div>
    </div>

    <div class="button-wrapper button-wrapper--right">
      <button class="gallery-button-next c-main-btn">
        <span class="current">
          @include('icon::arrow')
        </span>
        <span class="before">
          @include('icon::arrow')
        </span>
      </button>
    </div>
  </div>
</section>
