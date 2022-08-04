@php
$contactInfo = get_field('contact_info', 'option');
$socials = get_field('social_media', 'option');
$txt = $fields['txt'] ?? '';
@endphp

<section data-scroll-section class="l-contact-form">
  <div class="overflow-hidden">
    <p data-scroll class="l-contact-form__title h-xxl t-font-secondary t-upper">kontakt</p>
  </div>
  <div class="l-contact-form__inner">
    <div data-scroll class="l-contact-form__col l-contact-form__col--left">
      <p class="h-md t-upper t-font-secondary">dane kontaktowe</p>
      <p class="c-contact-form__content">{!! $txt ?? '' !!}</p>

      @include('molecules.contact-box', ['class' => 'phone', 'ACF' => $contactInfo])

      @include('molecules.contact-box', ['class' => 'mail', 'ACF' => $contactInfo])

      @include('molecules.contact-box', ['class' => 'map-pin', 'ACF' => $contactInfo])

      @include('molecules.contact-box', ['class' => 'clock', 'ACF' => $contactInfo])

      <p class="h-md t-upper t-font-secondary c-contact-form__title">social media</p>

      <div class="l-contact-form__row">
        <a href="{{ $socials['facebook']['url'] }}" target="_blank" class="t-font-secondary t-upper">
          @include('icon::fb-stroke')
          facebook
        </a>
        <a href="{{ $socials['instagram']['url'] }}" target="_blank" class="t-font-secondary t-upper">
          @include('icon::insta-stroke')
          instagram
        </a>
      </div>

    </div>
    <div data-scroll class="l-contact-form__col l-contact-form__col--right">
      {!! do_shortcode('[contact-form-7 id="238" title="Kontakt"]') !!}
    </div>
  </div>
</section>
