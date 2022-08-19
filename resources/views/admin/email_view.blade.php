<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Day & Night Kitchen Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="kitchen/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="kitchen/bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <!-- Bootstrap CSS-->
    @include('admin.css')

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body class="bg-dark" style="height:max-content !important">
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
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <!-- @include('admin.sidebar') -->

        <span class="heading">Main</span>
        <ul class="list-unstyled">
                <!-- <li ><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li class="active"><a href="{{url('make_reservations')}}"> <i class="icon-grid"></i>Reservations </a></li>
                <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                  </ul>
                </li>
                <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li> -->
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <!-- <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li> -->
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      



   <div class="d-grid gap-2">
     <a href="{{url('make_reservations')}}"><button style="height:7vh;margin:2vw;" type="button" name="" id="" class="btn btn-primary">Back</button></a>
   </div>
      <form style="margin-left:10vw;margin-top:5vh;height:max-content;" method="POST" action="{{url('sendemail',$data->id)}}" class="p-4 p-md-5 border rounded-3 bg-dark" >

                @csrf
             <div class="flex">
                <div class="form-floating mb-3">
                <input type="name" name="greeting" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label style="color:black !important" for="floatingInput">Greeting</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="action" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label style="color:black !important" for="floatingInput">Action Text</label>
              </div>
              </div>
              <!-- <div class="flex"> -->
              <div class="form-floating mb-3">
                <input type="text" name="body" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label style="color:black !important" for="floatingInput">Body</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="actionurl" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label style="color:black !important" for="floatingInput">Action Url</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="end" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label style="color:black !important" for="floatingInput">End Part</label>
              </div>
              
             
              <button class="w-100 btn btn-lg btn-info" type="submit">Send Mail</button>
              <hr class="my-4">
              <!-- <small class="text-muted">By clicking, you agree to the terms of use.</small> -->
            </form>
      <!-- @include('admin.body') -->
        <style>
            input{
                border-radius: 6px !important;
                background-color: white !important;
            }
        </style>



        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :) -->
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