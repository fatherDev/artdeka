<div class="c-contact-box {{ $class ?? '' }}">
  <div class="c-contact-box__img">
    @if ($class === 'phone')
      @include('icon::phone')
    @endif
    @if ($class === 'mail')
      @include('icon::mail')
    @endif
    @if ($class === 'map-pin')
      @include('icon::pin')
    @endif
    @if ($class === 'clock')
      @include('icon::clock')
    @endif
  </div>
  <div class="c-contact-box__content">
    @if ($class === 'phone')
      <a href="tel:{{ $ACF['telefon'] ?? '' }}">{{ $ACF['telefon'] ?? '' }}</a>
    @endif
    @if ($class === 'mail')
      <a href="mailto:{{ $ACF['e-mail'] ?? '' }}">{{ $ACF['e-mail'] ?? '' }}</a>
    @endif
    @if ($class === 'map-pin')
      <p>{!! $ACF['address'] ?? '' !!}</p>
    @endif
    @if ($class === 'clock')
      <p>godziny otwarcia: {!! $ACF['hours'] ?? '' !!}</p>
    @endif
  </div>
</div>
