@php
$about = $fields['about'] ?? '';
@endphp

<section data-scroll-section class="l-section l-about">
  <div class="c-sliding-img__container">

    @include('components.sliding-img', ['ACF' => $about['left_img']['url'], 'class' =>
    'c-sliding-img__wrapper--left', 'speed' => .9])

    @include('components.sliding-img', ['ACF' => $about['middle_img']['url'], 'class' =>
    'c-sliding-img__wrapper--middle', 'speed' => 2.2])

    @include('components.sliding-img', ['ACF' => $about['right_img']['url'], 'class' =>
    'c-sliding-img__wrapper--right', 'speed' => 1.6])

  </div>

  <div class="l-about__inner">

    <div class="l-about__col l-about__col--left">
      @include('atoms.heading', ['ACF' => $about['title']])
    </div>

    <div class="l-about__col l-about__col--right">
      <p class="reveal-text">{!! $about['text_block'] !!}</p>
      @if ($about['link_check'] === true)
        <a data-scroll data-scroll-offset="30%" href="{{ $about['link']['url'] ?? '' }}"
          class="l-about__btn c-line-btn">
          {{ $about['link']['title'] ?? '' }}
        </a>
      @endif
      @include('icon::art')
    </div>

  </div>
</section>
