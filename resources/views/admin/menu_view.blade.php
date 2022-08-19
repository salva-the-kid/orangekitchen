<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Day & Night Kitchen Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <base href="/public">
    @include('admin.css')

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
    @include('admin.head')





            <!-- Sidebar Toggle Btn-->
            @include('admin.toggle')

            <!-- Tasks-->
           
            <!-- Tasks end-->
            <!-- Megamenu-->
            
            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->
           
            <!-- Log out               -->

            <div class="list-inline-item logout"> 
            <x-app-layout>
   
             </x-app-layout>        
            </div>


          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title"> 
            <h1 class="h5">salva</h1>
            <p>Web Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <!-- @include('admin.sidebar') -->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('make_reservations')}}"> <i class="icon-grid"></i>Reservations </a></li>
                <li class="active"><a href="{{url('menu_view')}}"> <i class="fa fa-bar-chart"></i>Menu </a></li>
                <li><a href="{{url('chefs')}}"> <i class="icon-padnote"></i>Add Chefs </a></li>
                <li><a href="{{url('allchefs')}}"> <i class="icon-padnote"></i>All Chefs </a></li>
                
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      
      <!-- @include('admin.body') -->
       


        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>


    @include('sweetalert::alert')

    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>