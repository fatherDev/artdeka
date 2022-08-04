@php
$imgTextBlock = $fields['img_text_block'] ?? '';
@endphp

<section data-scroll-section class="l-section l-img-text-block">
  <div class="l-img-text-block__inner">
    <div class="l-more-info__row l-more-info__row--middle">
      <div class="l-more-info__col l-more-info__col--left">
        <figure class="l-more-info__img">
          <picture>
            <img src="{{ $imgTextBlock['img']['url'] ?? '' }}" alt="">
          </picture>
        </figure>
      </div>
      <div class="l-more-info__col l-more-info__col--right">
        <p class="h-lg t-upper t-font-secondary reveal-text">{!! $imgTextBlock['title'] ?? '' !!}</p>
        <p class="reveal-text">{!! $imgTextBlock['text_block'] ?? '' !!}</p>
      </div>
    </div>
  </div>
</section>
