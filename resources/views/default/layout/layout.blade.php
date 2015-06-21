<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
      @yield('title')
    </title>
    
     <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
          
</head>
<body>

   <header>
       <ul class="side-nav fixed light-blue">
           <li class="logo">
               <a href="#!"><i class="brand-icon mdi-hardware-desktop-windows"></i></a>
               <a href="#">Kingsville Hills Homeowners Association</a>
           </li>
           <li class="bold">
               <ul class="collapsible" data-collapsible="accordion">
                   <a href="#!"><i class="mdi-action-account-circle"></i> Users</a>
               </ul>
           </li>
           <li class="bold"><a href="#!"><i class="mdi-action-home"></i> Homeowners</a></li>
           <li class="bold"><a href="#!"><i class="mdi-device-access-time"></i> Logs</a></li>
           <li class="bold"><a href="#!"><i class="mdi-action-settings-power "></i> Logout</a></li>
       </ul>
   </header>
    <main class="content">
        @yield('content')
        
       
    </main>
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
  
  @yield('script')


  <script>
      $(document).ready(function() {
        $('select').material_select();
      });  
  </script>
</body>
</html>