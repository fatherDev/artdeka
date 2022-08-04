@php
$realizationsRepeater = $fields['realizations_repeater'] ?? '';
$galleryCount = 1;
@endphp

<section data-scroll-section class="l-section l-masonry">
  <div data-scroll data-scroll-offset="30%" class="l-masonry__inner">

    @foreach ($realizationsRepeater as $realization)
      <a data-barba-prevent href="{{ $realization['single_gallery'][0]['url'] }}" class="c-masonry-item glightbox"
        data-gallery="gallery{{ $galleryCount }}">
        <img src="{{ $realization['single_gallery'][0]['url'] }}" alt="">
        <div class="overflow-hidden">
          <p class="h-xs t-font-secondary t-upper c-masonry-item__title">{{ $realization['title'] ?? '' }}</p>
        </div>
      </a>
      <div class="visibility-hidden">
        @foreach ($realization['single_gallery'] as $key => $item)
          @if ($key > 0)
            <a class="glightbox" href="{{ $item['url'] }}" data-gallery="gallery{{ $galleryCount }}">
              <img src="" alt="">
            </a>
          @endif
        @endforeach
      </div>

      @php
        $galleryCount += 1;
      @endphp

    @endforeach

  </div>
</section>
