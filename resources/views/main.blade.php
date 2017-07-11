@include('partials._head')

@yield('stylesheet')
<body>

@include('partials._nav')
@include('partials._message')
<div class="container">

  @yield('content')

@include('partials._footer')
@include('partials._javascript')
@yield('scripts')
  </body>
</html>
