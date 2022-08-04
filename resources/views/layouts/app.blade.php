<div id="body-classes" @php(body_class())></div>

<div id="preloader">
  @include('icon::preloader')
</div>

@include('molecules.header')

<main class="l-main">
  @yield('content')
</main>

@include('molecules.footer')
