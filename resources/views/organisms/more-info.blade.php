@php
$moreInfo = $fields['more_info'] ?? '';
@endphp

<section data-scroll-section class="l-section  l-more-info">
  <div class="l-more-info__inner">
    <div class="l-more-info__row l-more-info__row--bottom">
      <div class="l-more-info__col l-more-info__col--left">
        <figure class="l-more-info__img">
          <picture>
            <img src="{{ $moreInfo['img']['url'] ?? '' }}" alt="">
          </picture>
        </figure>
      </div>
      <div class="l-more-info__col l-more-info__col--right">
        <p class="h-md t-upper t-font-secondary reveal-text">{!! $moreInfo['title'] ?? '' !!}</p>
        @include('icon::author', ['class' => 'author'])
        <p class="l-more-info__desc reveal-text">{!! $moreInfo['text_block'] ?? '' !!}</p>
        <a data-scroll data-scroll-offset="25%" href="{{ $moreInfo['link']['url'] ?? '' }}"
          class="l-more-info__btn c-line-btn">
          {{ $moreInfo['link']['title'] ?? '' }}
        </a>
      </div>
    </div>
  </div>
</section>
