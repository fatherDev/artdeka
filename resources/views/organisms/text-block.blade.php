<section data-scroll-section class="l-text-block {{ $class ?? '' }}">
  <div class="l-text-block__inner">
    <div class="l-text-block__col l-text-block__col--left">
      <p class="h-lg t-font-secondary t-upper reveal-text">{!! $ACF['title'] ?? '' !!}</p>
    </div>
    <div class="l-text-block__col l-text-block__col--right">
      <p class="reveal-text">{!! $ACF['text_block'] ?? '' !!}</p>
    </div>
  </div>
</section>
