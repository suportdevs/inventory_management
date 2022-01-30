<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intentory Management</title>
  <link rel="icon" type="image/icon" href="{{ asset('inventory_management/assets/images/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('inventory_management/assets/plugins/nprogress/nprogress.css') }}">
  <link rel="stylesheet" href="{{ asset('inventory_management/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('inventory_management/assets/plugins/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('inventory_management/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('inventory_management/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
  <link id="darkTheme" rel="stylesheet" href="">
  <!-- <link rel="stylesheet" href="{{ asset('inventory_management/assets/css/darkblue.css') }}"> -->
  <script src="{{ asset('inventory_management/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body>
  <script>
    NProgress.configure({ showSpinner: true });
    NProgress.start();
  </script>

    @include('layout.navigation')

    @yield('content')


  <script src="{{ asset('inventory_management/assets/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('inventory_management/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
  <script src="{{ asset('inventory_management/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
  <script src="{{ asset('inventory_management/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('inventory_management/assets/plugins/charts/Chart.min.js') }}"></script>
  <script src="{{ asset('inventory_management/assets/plugins/charts/chart.js') }}"></script>
  <script src="{{ asset('inventory_management/assets/js/custom.js') }}"></script>

</body>

</html>