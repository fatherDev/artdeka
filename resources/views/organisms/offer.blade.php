@php
$offer = $fields['offer_repeater'] ?? '';
$planCount = 1;
@endphp

<section data-scroll-section class="l-section l-plan">
  <div class="l-plan__inner">

    @foreach ($offer as $item)
      <div class="l-plan__row">

        @include('molecules.offer-teaser', ['ACF' => $item])

      </div>

      @php
        $planCount += 1;
      @endphp
    @endforeach

  </div>
</section>
