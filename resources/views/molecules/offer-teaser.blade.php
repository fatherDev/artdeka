<div class="c-plan-teaser">
  <div data-scroll data-scroll-offset="35%" class="c-plan-teaser__img-wrapper">
    <div class="c-plan-teaser__img">
      <img src="{{ $ACF['img']['url'] ?? '' }}" alt="">
    </div>
    <div class="cover"></div>
  </div>
  <div class="c-plan-teaser__box">
    <div class="c-plan-teaser__title">
      <p class="h-md t-upper t-font-secondary reveal-text">{{ $ACF['title'] ?? '' }}</p>
      <span data-scroll data-scroll-offset="30%"
        class="c-plan-teaser__count t-font-secondary">0{{ $planCount }}</span>
    </div>
    <div data-scroll data-scroll-offset="30%" class="c-plan-teaser__desc c-plan-teaser__desc-wysiwyg">
      {!! $ACF['text_block'] ?? '' !!}</div>
  </div>
</div>
