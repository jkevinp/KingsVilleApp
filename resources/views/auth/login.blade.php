<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kingsville Home</title>
    <!-- Bootstrap Core CSS -->
    {{!! Html::style(('guest/css/bootstrap.min.css')) !!}}
    {{!! Html::style(('guest/css/landing-page.css'))  !!}}
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Kingsville Homeowner's Association</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <div class="intro-message">
                        <h1>User's Login</h1>
                        <hr class="intro-divider">
							<div class="row alert">

								@if (count($errors) > 0)
                                    <div class='alert alert-danger'>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
								<form class="form-horizontal" role="form" method="POST" action="{{ url(route('auth.signin'))}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="input-group input-group-lg">
								 	<span class="input-group-addon btn-pr" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
									<input type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" aria-describedby="sizing-addon1">
								</div>
								<div class="input-group input-group-lg">
									<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-asterisk">&nbsp;&nbsp;</i></span>
									<input type="password"  name="password" placeholder='password' class='form-control' value="{{ old('email') }}" aria-describedby="sizing-addon1">
								</div>
								
								<div class="btn-group btn-group-justified" role="group" aria-label="...">
									<div class="btn-group" role="group">
									     <button type="submit" class="btn btn-primary">Login</button>
									  </div>
									  <div class="btn-group" role="group">
									    
								  <a class="btn btn-primary" href="{{route('User.account.forgotpassword')}}">Forgot Your Password?</a>
									  </div>
								 
								</div>
								</form>
							</div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
