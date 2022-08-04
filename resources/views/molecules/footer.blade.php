@php
$contactInfo = get_field('contact_info', 'option');
$socials = get_field('social_media', 'option');
$contact = get_field('contact', 'option');
@endphp

<section data-scroll-section class="l-section l-contact-home">

  @include('atoms.scaling-line')

  <div class="l-contact-home__inner">
    <p class="h-xxl t-upper t-font-secondary reveal-text">{!! $contact['title'] ?? '' !!}</p>
    <p class="reveal-text">{!! $contact['text_block'] ?? '' !!}</p>
    <a data-scroll data-scroll-offset="30%" href="{{ $contact['link']['url'] ?? '' }}" class="c-main-btn">
      <span class="current">
        @include('icon::arrow')
      </span>
      <span class="before">
        @include('icon::arrow')
      </span>
    </a>
  </div>
</section>

<footer data-scroll-section class="l-footer">

  @include('atoms.scaling-line', ['class' => 'c-scaling-line--light'])

  <div class="l-footer__head">
    <div class="l-footer__box">
      <p class="t-upper title">telefon</p>
      <a class="t-font-secondary" href="tel:{{ $contactInfo['telefon'] }}">{{ $contactInfo['telefon'] }} </a>
    </div>
    <div class="l-footer__box">
      <p class="t-upper title">adres</p>
      <p class="t-font-secondary">{!! $contactInfo['address'] !!} </p>
    </div>
    <div class="l-footer__box">
      <p class="t-upper title">e-mail</p>
      <a class="t-font-secondary" href="mailto:{{ $contactInfo['e-mail'] }}">{{ $contactInfo['e-mail'] }} </a>
    </div>
  </div>

  <div class="l-footer__inner-wrapper">

    @include('atoms.scaling-line', ['class' => 'c-scaling-line--light', 'offset' => '5%'])

    <div class="l-footer__inner">
      <div class="l-footer__box-inner l-footer__box-inner--first">
        <a href="/polityka-prywatnosci/" class="t-upper">polityka prywatności</a>
      </div>
      <div class="l-footer__box--middle">
        <img src="@asset('/images/logo-sygnet.svg')" alt="">
        <p>COPYRIGHT {{ date('Y') }} © ARTdeka</p>
      </div>
      <div class="l-footer__box--right">
        <div class="l-footer__box-inner">
          <p class="t-upper">śledź nas na</p>
          <div class="l-footer__box-wrapper">
            <a href="{{ $socials['facebook']['url'] }}" target="_blank">
              @include('icon::fb')
            </a>
            <a href="{{ $socials['instagram']['url'] }}" target="_blank">
              @include('icon::insta')
            </a>
          </div>
        </div>
        <div class="l-footer__box-inner">
          <p class="t-upper">projekt strony</p>
          <a class="t-font-secondary t-upper prograffing"
            href="https://prograffing.pl/strony-internetowe/">prograffing</a>
        </div>
      </div>
    </div>

  </div>
</footer>
