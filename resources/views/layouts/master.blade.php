@include('includes.head')

@section('css')
<link rel="stylesheet" href="/css/nav.css">


<body>

  @include('includes.nav');


  @yield('content')


  @include('includes.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
