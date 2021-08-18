  <div class="page-sidebar">

        <ul class="x-navigation">
         
          @if(Auth::user()->is_role == '1' || Auth::user()->is_role == '2')
          
            <li class="" style="background: #F85F6A; text-align: center;">
                <a style="font-size: 22px;" href="{{ url('admin/dashboard') }}"><b>Laravel Eight</b></a>
                <a href="#" class="x-navigation-control"></a>
            </li>

             <li class="@if ( Request::segment(2) == 'dashboard') active @endif">
                <a href="{{ url('admin/dashboard') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>

             <li class="@if ( Request::segment(2) == 'orders') active @endif">
                <a href="{{ url('admin/orders') }}"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Orders List</span></a>
            </li>
            
          @endif  


          @if(Auth::user()->is_role == '3')

            <li class="" style="background: #F85F6A; text-align: center;">
                <a style="font-size: 22px;" href="{{ url('school/dashboard') }}"><b>Laravel Eight</b></a>
                <a href="#" class="x-navigation-control"></a>
            </li>

            <li class="@if ( Request::segment(2) == 'dashboard') active @endif">
                <a href="{{ url('school/dashboard') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>

         
            <li class="@if ( Request::segment(2) == 'orders') active @endif">
                <a href="{{ url('school/orders') }}"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Orders List</span></a>
            </li>
            @endif



          @if(Auth::user()->is_role == '4')

            <li class="" style="background: #F85F6A; text-align: center;">
                <a style="font-size: 22px;" href="{{ url('teacher/dashboard') }}"><b>Laravel Eight</b></a>
                <a href="#" class="x-navigation-control"></a>
            </li>

            <li class="@if ( Request::segment(2) == 'dashboard') active @endif">
                <a href="{{ url('teacher/dashboard') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>

         
            <li class="@if ( Request::segment(2) == 'orders') active @endif">
                <a href="{{ url('teacher/orders') }}"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Orders List</span></a>
            </li>
            @endif


        </ul>
    </div>