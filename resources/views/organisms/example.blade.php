@php
$example = $fields['example'] ?? '';
@endphp

<section data-scroll-section class="l-example">
  <div class="l-example__inner">
    <div class="l-example__col l-example__col--left">
      @include('icon::plan')
    </div>
    <div class="l-example__col l-example__col--right">
      <p class="h-md t-font-secondary t-upper reveal-text">{!! $example['title'] ?? '' !!}</p>
      <div class="l-example__content reveal-text">{!! $example['text_block'] ?? '' !!}</div>
      <a data-scroll data-scroll-offset="30%" href="{{ $example['file']['url'] }}"
        download="Przykładowy projekt kompleksowy" class="c-line-btn">Pobierz
        dokumentację</a>
    </div>
  </div>
</section>
