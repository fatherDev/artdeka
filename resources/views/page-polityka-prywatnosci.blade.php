@extends('layouts.app')

@section('content')
  <section data-scroll-section class="l-section l-privacy">
    <div class="l-privacy__inner">
      <p class="h-lg t-font-secondary t-upper">Polityka prywatności</p>
      {!! the_content() !!}
    </div>
  </section>
@endsection
