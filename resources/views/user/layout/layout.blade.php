<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
      @yield('title')
    </title>
    
     <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  {!! Html::style('css/main.css') !!}
  {!! Html::style('js/gritter/css/jquery.gritter.css') !!}
</head>
<body>

   <header>
       <ul class="side-nav fixed light-blue">
           <li class="logo">
               <a href="{{URL::route('Guest.home')}}"><i class="brand-icon mdi-hardware-desktop-windows"></i></a>
               <a href="{{URL::route('Guest.home')}}">Kingsville Hills Homeowners Association</a>
           </li>
          
           @if(Auth::user())
            <li class="bold">
               <ul class="collapsible" data-collapsible="accordion">
                   <a href="{{URL::route('User.index')}}"><i class="mdi-action-account-circle"></i> Users</a>
               </ul>
           </li>
           <li class="bold"><a href="{{URL::route('HomeOwner.index')}}"><i class="mdi-action-home"></i> Homeowners</a></li>
           <li class="bold"><a href="#!"><i class="mdi-device-access-time"></i> Logs</a></li>
           <li class="bold"><a href="{{URL::route('User.session.logout')}}"><i class="mdi-action-settings-power "></i> Logout</a></li>
           @else
           <li class="bold"><a href="{{URL::route('Guest.home')}}"><i class="mdi-action-settings-power"></i> Home</a></li>
           <li class="bold"><a href="{{URL::action('HomeController@login')}}"><i class="mdi-action-settings-power"></i> Login</a></li>
           @endif
       </ul>
   </header>
    <main class="content">
        @yield('content')
    </main>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
  {!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
  {!! Html::script('js/gritter/js/jquery.gritter.js') !!}
  {!! Html::script('js/gritter/gritter-conf.js') !!}
  @yield('script')
 
  @if(isset($errors) && ($errors->first()))
      <script type="text/javascript">
        var x= "{{$errors->first()}}";
        if(x !== ""){
          $(document).ready(function () {
          var unique_id = $.gritter.add({
            title: '<font color="red">Error!</font><hr>',
            text: x,
            sticky: false,
            time: '',
            class_name: 'my-sticky-class'
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
            image: '',
            sticky: false,
            time: '',
            class_name: 'my-sticky-class'
            });
        });
    </script>
    @endif

  <script>
      $(document).ready(function() {
        $('select').material_select();
      });  
  </script>
</body>
</html>