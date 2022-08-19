<!DOCTYPE html>
<html>
  <head> 
  <base href="/public">
  <link rel="stylesheet" href="kitchen/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="kitchen/bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Day & Night Kitchen Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    @include('admin.css')



    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body class="bg-dark">
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
      <nav style="height:200vh !important;" id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title"> 
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
                <!-- <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('make_reservations')}}"> <i class="icon-grid"></i>Reservations </a></li>
                <li><a href="{{url('menu_view')}}"> <i class="fa fa-bar-chart"></i>Menu </a></li>
                <li><a href="{{url('chefs')}}"> <i class="icon-padnote"></i>Add Chefs </a></li>
                <li><a href="{{url('allchefs')}}"> <i class="icon-padnote"></i>All Chefs </a></li>
                 -->
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <!-- <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li> -->
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      
   
       <div class="d-grid gap-2">
     <a href="{{url('allchefs')}}"><button style="height:7vh;margin:2vw;" type="button" name="" id="" class="btn btn-primary">Back</button></a>
   </div>

<form style="margin-left:10vw;margin-top:5vh;;" method="POST" action="{{url('editchef',$data->id)}}" class="p-4 p-md-5 border rounded-3 bg-dark" enctype="multipart/form-data" >

@csrf

<div class="form-floating mb-3">
<input type="name" name="name" class="form-control" id="floatingInput" value="{{$data->name}}"  required>
<label style="color:black !important" for="floatingInput">Name</label>
</div>


<!-- <div class="flex"> -->
<div class="form-floating mb-3">
<input type="text" name="specialty" class="form-control" id="floatingInput" value="{{$data->specialty}}" required>
<label style="color:black !important" for="floatingInput">Specialty</label>
</div>
<div class="form-floating mb-3">
<input type="text" name="qualifications" class="form-control" id="floatingInput" value="{{$data->qualifications}}" required>
<label style="color:black !important" for="floatingInput">Qaulifications</label>
</div>
<div class="form-floating mb-3">
<!-- <input type="file" name="image" class="form-control" id="floatingInput"  required> -->
<label style="color:white !important" for="floatingInput">Old Image</label>
<img style="height:30vh ;" src="chefimage/{{$data->image}}" class="img-fluid rounded-top" alt="">
</div>
<div class="form-floating mb-3">
<input type="file" name="image" class="form-control" id="floatingInput" value="{{$data->name}}" required>
<label style="color:black !important" for="floatingInput">New Image</label>
</div>


<button class="w-100 btn btn-lg btn-info" type="submit" >Upload</button>
<hr class="my-4">
<!-- <small class="text-muted">By clicking, you agree to the terms of use.</small> -->
</form>
<!-- @include('admin.body') -->
<style>
input{
border-radius: 6px !important;
background-color: white !important;

}
form{
height: max-content !important;
/* border-color:none !important; */
}
</style>

       


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