<!DOCTYPE html>
<html>
  <head> 
  <link rel="stylesheet" href="kitchen/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="kitchen/bootstrap-5.0.2-dist/css/bootstrap.min.css">
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
  <body class="">
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
          <!-- <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div> -->
          <div class="title"> 
            <h1 class="h5">Admin</h1>
            <p>salva</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <!-- @include('admin.sidebar') -->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
                <li ><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('make_reservations')}}"> <i class="icon-grid"></i>Reservations </a></li>
                <li><a href="{{url('menu_view')}}"> <i class="fa fa-bar-chart"></i>Menu </a></li>
                <li><a href="{{url('chefs')}}"> <i class="icon-padnote"></i>Add Chefs </a></li>
                <li class="active"><a href="{{url('allchefs')}}"> <i class="icon-padnote"></i>All Chefs </a></li>
               
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      
      
  
          <table style="width:100% !important" class="table bg-dark  table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Chef Name</th>
                    <th>Specialty</th>
                    <th>Qualification</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($data as $chefs)

                        <td style="color:rgb(143, 142, 142) !important;" scope="row">{{$chefs->name}}</td>
                        <td style="color:rgb(143, 142, 142) !important;">{{$chefs->specialty}}</td>
                        <td style="color:rgb(143, 142, 142) !important;">{{$chefs->qualifications}}</td>
                        <td ><img style="height:20vh" src="chefimage/{{$chefs->image}}" class="img-fluid rounded-top" alt=""> </td>
                        

                        <td><a name="" id="" class="btn btn-outline-danger" href="{{url('deletechef',$chefs->id)}}" role="button">Delete</a></td>
                         <td><a name="" id="" class="btn btn-outline-info" href="{{url('updatechef',$chefs->id)}}" role="button">Update</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
        </table>
        
    <style>
        th{
            color:rgb(143, 142, 142) !important;
        }
    </style>


        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2022 &copy; salva thr kid </p>
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