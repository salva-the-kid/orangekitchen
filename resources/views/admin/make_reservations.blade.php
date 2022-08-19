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
    @include('admin.css')

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body style="height:max-content;" class="bg-dark">
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
                <li class="active"><a href="{{url('make_reservations')}}"> <i class="icon-grid"></i>Reservations </a></li>
                <li><a href="{{url('menu_view')}}"> <i class="fa fa-bar-chart"></i>Menu </a></li>
                <li><a href="{{url('chefs')}}"> <i class="icon-padnote"></i>Add Chefs </a></li>
                <li><a href="{{url('allchefs')}}"> <i class="icon-padnote"></i>All Chefs </a></li>
                <!-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                  </ul>
                </li>
                <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul> -->
      </nav>
      <!-- Sidebar Navigation end-->
      
      <!-- @include('admin.body') -->
        <table style="width:100% !important" class="table bg-dark  table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Table</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                    <th>Delete</th>
                    <th>Send mail</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $appoint)
                    <tr>
                        <td scope="row">{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->tabletype}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->time}}</td>
                        <td>{{$appoint->message}}</td>

                        <td><a name="" id="" class="btn btn-outline-danger" href="{{url('deletereservations',$appoint->id)}}" role="button">Delete</a></td>


                        <td><a name="" id="" class="btn btn-outline-info" href="{{url('emailview',$appoint->id)}}" role="button">Send Email</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
        </table>
        


        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :) -->
               <p class="no-margin-bottom">2022 &copy; salva the kid </p>
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