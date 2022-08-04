@php
$contact = $fields['contact'] ?? '';
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
