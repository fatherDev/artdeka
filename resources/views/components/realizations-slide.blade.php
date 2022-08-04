<div class="swiper-slide c-realizations-slide">
  <a data-barba-prevent href="{{ $ACF['gallery'][0]['url'] }}" class="c-realizations-slide__link glightbox"
    data-gallery="gallery{{ $galleryCount }}">
    <div class="c-realizations-slide__img-wrapper">
      <figure class="c-realizations-slide__img">
        <picture>
          <img src="{{ $ACF['gallery'][0]['url'] }}" alt="">
        </picture>
      </figure>
    </div>
    <p class="h-xs t-font-secondary t-upper c-realizations-slide__title">{{ $ACF['title'] }}</p>
    <p>{{ $ACF['place'] }}</p>
  </a>
  <div class="visibility-hidden">
    @foreach ($ACF['gallery'] as $key => $item)
      @if ($key > 0)
        <a class="glightbox" href="{{ $item['url'] }}" data-gallery="gallery{{ $galleryCount }}">
          <img src="" alt="">
        </a>
      @endif
    @endforeach
  </div>
</div>
