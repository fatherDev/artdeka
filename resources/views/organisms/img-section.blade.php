@php
$imgSection = $fields['img_section']['about'] ?? '';
@endphp

<section data-scroll-section class="l-section l-img">
  <div class="c-sliding-img__container">

    @include('components.sliding-img', ['ACF' => $imgSection['left_img']['url'], 'class' =>
    'c-sliding-img__wrapper--left', 'speed' => .9])

    @include('components.sliding-img', ['ACF' => $imgSection['middle_img']['url'], 'class' =>
    'c-sliding-img__wrapper--middle', 'speed' => 2.2])

    @include('components.sliding-img', ['ACF' => $imgSection['right_img']['url'], 'class' =>
    'c-sliding-img__wrapper--right', 'speed' => 1.6])

  </div>

  <div class="l-img__inner">

    <div class="l-img__col l-img__col--left">
      @include('atoms.heading', ['ACF' => $imgSection['title'], 'class' => 'h-lg'])
    </div>

    <div class="l-img__col l-img__col--right">
      <p class="reveal-text">{!! $imgSection['text_block'] !!}</p>
      @if ($imgSection['link_check'] === true)
        <a data-scroll data-scroll-offset="30%" href="{{ $imgSection['link']['url'] ?? '' }}"
          class="l-about__btn c-line-btn">
          {{ $imgSection['link']['title'] ?? '' }}
        </a>
      @endif
    </div>

  </div>
</section>
