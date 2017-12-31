<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Making organizational interaction fluid">
    <meta name="author" content="Theophilus Paintsil">

    <title>HR &amp; Employee Self Service - Login</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Begin Grid Container -->
<div class="grid-container">
  <!-- Begin Form Column -->
  <div class="form-column">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>HREMP <small><i class="la la-cube la-2x"></i></small> </h1>
          <form class="form-horizontal">
            <div class="form-group">
              <div class="col-md-12">
                <label for="username" class="control-label">Username</label>
                <input class="form-control" type="text" id="username">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <label for="password" class="control-label">Password</label>
                <input class="form-control" type="password" id="password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-8">
                <p><a>Forgot Password?</a></p>
              </div>
              <div class="col-md-4">
                <a href="index.php" class="btn btn-primary pull-right btn-block" id="btnSignIn">Sign in</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Form Column -->

  <!-- Begin Info Column -->
  <div class="content-column">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1>HR &amp; Employee Portal</h1>
          <h1><i class="la la-users"></i></h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Info Column -->
</div>
<!-- End Grid Container -->

<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
