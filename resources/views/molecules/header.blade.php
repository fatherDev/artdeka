@php
$contactInfo = get_field('contact_info', 'option');
$socials = get_field('social_media', 'option');
@endphp

<header class="l-header">
  <div class="l-header__inner">
    <div class="l-header__inner-wrapper">
      <a class="ui-link" href="{{ home_url('/') }}">
        <img src="@asset('/images/logo.svg')" alt="">
      </a>
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      @endif
      <div id="c-hamburger-menu" class="c-hamburger-menu">
        <div class="c-hamburger-menu__line c-hamburger-menu__line--top"></div>
        <div class="c-hamburger-menu__line c-hamburger-menu__line--middle"></div>
        <div class="c-hamburger-menu__line c-hamburger-menu__line--bottom"></div>
      </div>
    </div>
  </div>
</header>
<div class="c-contact__wrapper">
  <div class="c-contact__inner">
    <div class="c-contact__box t-font-secondary">
      <a href="tel:{{ $contactInfo['telefon'] }}">
        @include('icon::phone', ['class' => 'c-contact__box--phone'])
        {{ $contactInfo['telefon'] }}
      </a>
    </div>
    <div class="c-contact__box-wrapper">
      <div class="c-contact__box t-font-secondary">
        <a href="{{ $socials['facebook']['url'] }}" target="_blank">
          @include('icon::fb-stroke')
        </a>
      </div>
      <div class="c-contact__box t-font-secondary">
        <a href="{{ $socials['instagram']['url'] }}" target="_blank">
          @include('icon::insta-stroke')
        </a>
      </div>
    </div>
  </div>
</div>
