<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Making organizational interaction fluid">
  <meta name="author" content="Theophilus Paintsil">

  <title>HR Employee Self Service - @yield('title')</title>
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/line-awesome.min.css') }}" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <!-- Start Menu Bars -->
  <nav class="navbar navbar-default navbar-static-top mnav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand" id="menu-toggle">
          HREMP <small><i class="la la-cube la-2x"></i></small>
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> <i class="la la-bell"></i> Notifications</a></li>
        <li><a href="#"> <i class="la la-cogs"></i> Configurations</a></li>
      </ul>
    </div>
  </nav>

  <div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/"><i class="la la-home"></i>&nbsp;Dashboard</a></li>
        <li><a href="/msg"><i class="la la-envelope"></i>&nbsp;Message(s)</a></li>
        <li><a href="/emp"><i class="la la-users"></i>&nbsp;Employees</a></li>
        <li><a href="/leave"><i class="la la-clock-o"></i>&nbsp;Time Off</a></li>
        <li><a href="/att"><i class="la la-calendar"></i>&nbsp;Attendance</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="la la-user"></i><span id="loggedInUser">Administrator</span> <i class="caret"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="logout.php?lg=true">Profile Settings</a></li>
            <li><a href="logout.php?lg=true">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- End Menu Bars -->

  @yield('content')



  <script src="{{ URL::asset('js/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/moment.min.js') }}"></script>
  <script src="{{ URL::asset('js/list.min.js') }}"></script>
  <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
