@php
$stages = $fields['stages'] ?? '';
@endphp

<section data-scroll-section class="l-stages">
  <div data-scroll data-scroll-offset="40%" class="l-stages__inner">
    <div class="swiper stages-text-swiper">
      <div class="swiper-wrapper">
        @foreach ($stages as $item)
          <div class="swiper-slide c-stage-text-slide">
            <div class="c-stage-text-slide__col">
              <p class="c-stage-text-slide__label t-upper">Etapy współpracy</p>
              <div class="overflow-hidden">
                <p class="c-stage-text-slide__title h-xl t-font-secondary t-upper">{{ $item['title'] ?? '' }}</p>
              </div>
              <p class="c-stage-text-slide__content">{!! $item['content'] ?? '' !!}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="swiper stages-img-swiper">
      <div class="swiper-wrapper">
        @foreach ($stages as $item)
          <div class="swiper-slide c-stage-img-slide">
            <div class="c-stage-img-slide__img-wrapper">
              <img src="{{ $item['img']['url'] ?? '' }}" alt="" class="c-stage-img-slide__img">
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="l-stages__button-wrapper">
      <button class="stages-button-prev c-main-btn">
        <span class="current">
          @include('icon::arrow')
        </span>
        <span class="before">
          @include('icon::arrow')
        </span>
      </button>
      <button class="stages-button-next c-main-btn">
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
