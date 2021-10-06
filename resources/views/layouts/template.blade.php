<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Test 1</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
  <!-- custom styles -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="bg-body">

  <!--Main Navigation-->
  <header>

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
      <div class="list-group list-group-flush">
        <a class="navbar-brand waves-effect ml-3 mb-3" href="{{route('list')}}">
          <img class="img-fluid" width="140" src="{{asset('sources/logo.png')}}">
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-home mr-3"></i>Dashboard
        </a>
        <p class="list-group-item list-title">
            MAIN MENU</p>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-chart-line mr-3"></i>Analytics</a>
        <a href="#" class="list-group-item active waves-effect">
            <i class="fas fa-user-friends mr-3"></i>Customers</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-tag mr-3"></i>Products</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-shopping-cart mr-3"></i>Orders</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-file-contract mr-3"></i>Reports</a>
        <p class="list-group-item list-title">
            HELP</p>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-cog mr-3"></i>Settings</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-headphones-alt mr-3"></i>Support</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  @yield('content')

  @yield('script')

   <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('js/mdb.js')}}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
