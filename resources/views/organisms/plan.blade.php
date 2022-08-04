@php
$plan = $fields['plan'] ?? '';
$planCount = 1;
@endphp

<section data-scroll-section class="l-section l-plan">
  <div class="l-plan__inner">
    <p data-scroll data-scroll-offset="40%" class="l-plan__title h-xl t-upper t-font-secondary">{!! $plan['title'] ?? '' !!}
    </p>
    <img class="l-plan__img" src="@asset('/images/logo-sygnet.svg')" alt="">

    @foreach ($plan['plan_repeater'] as $item)

      <div class="l-plan__row">

        @include('molecules.plan-teaser', ['ACF' => $item])

      </div>

      @php
        $planCount += 1;
      @endphp

    @endforeach

  </div>
</section>
