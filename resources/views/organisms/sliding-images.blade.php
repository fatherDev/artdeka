@php
$offerImgSec = $fields['offer_img_sec'] ?? '';
@endphp

<section data-scroll-section class="l-sliding-images">
  <div data-scroll class="c-sliding-img__container">

    @include('components.sliding-img', ['ACF' => $offerImgSec['left_img']['url'], 'class' =>
    'c-sliding-img__wrapper--left', 'speed' => 1.5])

    @include('components.sliding-img', ['ACF' => $offerImgSec['right_img']['url'], 'class' =>
    'c-sliding-img__wrapper--right', 'speed' => 0.9])

  </div>
</section>
