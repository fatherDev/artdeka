@php
$realizations = $fields['realizations'] ?? '';
$galleryCount = 1;
@endphp

<section data-scroll-section class="l-section l-realizations">
  <div class="l-realizations__inner">
    <h3 class="h-lg t-font-secondary t-upper reveal-text">Realizacje</h3>
  </div>

  <div data-scroll data-scroll-offset="40%" class="realizations-swiper__navigation-wrapper l-realizations__inner">
    <div class="realizations-swiper__bar-wrapper">
      <span class="realizations-swiper__bar"></span>
    </div>
    <button class="realizations-button-prev c-main-btn">
      <span class="current">
        @include('icon::arrow')
      </span>
      <span class="before">
        @include('icon::arrow')
      </span>
    </button>
    <button class="realizations-button-next c-main-btn">
      <span class="current">
        @include('icon::arrow')
      </span>
      <span class="before">
        @include('icon::arrow')
      </span>
    </button>
  </div>

  <div data-scroll data-scroll-offset="20%" class="swiper realizations-swiper">
    <div class="swiper-wrapper">

      @foreach ($realizations as $item)

        @include('components.realizations-slide', ['ACF'=> $item])

        @php
          $galleryCount += 1;
        @endphp

      @endforeach

    </div>
  </div>
</section>
