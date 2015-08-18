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
    {!! Html::style(('guest/css/bootstrap.min.css')) !!}
    {!! Html::style(('guest/css/landing-page.css'))  !!}
    {!! Html::style(('guest/font-awesome/css/font-awesome.min.css'))  !!}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('default')}}/js/gritter/css/jquery.gritter.css" />   
    <!-- Custom Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Ruda:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body >

    <!-- Navigation -->
    @include('guest.layout.topbar')

    <!-- Header -->
    @yield('content')


    <!-- /.intro-header -->

    <!-- Page Content -->
    {!! Html::script(('guest/js/jquery.js'))  !!}
    {!! Html::script(('guest/js/bootstrap.min.js')) !!}
    <script type="text/javascript" src="{{URL::asset('default')}}/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="{{URL::asset('default')}}/js/gritter-conf.js"></script>
     @if(isset($errors) && ($errors->first()))
      <script type="text/javascript">
        var x= "{{$errors->first()}}";
        if(x !== "")
        {
             $(document).ready(function () {
          var unique_id = $.gritter.add({
            title: '<font color="red">Error!</font><hr>',
            text: x,
            image: '{{URL::asset("default/img/icons/")}}/close.png',
            sticky: false,
            time: '',
            class_name: 'gritter-center'
            });
        });
        }
    </script>
    @endif

     @if(Session::get('flash_message'))
        <script type="text/javascript">
        var xx= "{{Session::pull('flash_message')}}";
        $(document).ready(function () {
          var iunique_id = $.gritter.add({
            title: '<font color="yellow">Notification</font><hr>',
            text: xx,
            image: '{{URL::asset("default/img/icons/")}}/notification.png',
            sticky: false,
            time: '',
            class_name: 'my-sticky-class'
            });
        });
    </script>
    @endif
   
</body>
</html>
