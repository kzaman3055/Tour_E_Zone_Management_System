@php

$prefix = Request::route()->getprefix();
$route = Route::current()->getName();



@endphp





<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{route('user.home')}}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- <img src="{{ asset('backend/images/logo-dark.png') }}" alt=""> -->
                        <h3>Welcome {{ Auth::user()->name }}.</h3>






                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>

                <a href="{{route('user.home')}}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>




       


            <li class="treeview {{($prefix=='/package')?'active':''}} && {{($prefix=='/packagetype')?'active':''}}">
                <a href="#">
                    <i data-feather="package"></i>
                    <span>Manage Package</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{route('userpackage.view')}}"><i class="ti-more"></i>View Package</a></li>
                    <li><a href="{{route('pendingpackage.view')}}"><i class="ti-more"></i>Panding Package</a></li>
                    <li><a href="{{route('packagehistory.view')}}"><i class="ti-more"></i>Order History</a></li>

                    





                </ul>
            </li>




        

    

         










        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a class="link" data-toggle="tooltip" title="" data-original-title=""><i class=""></i></a>
        <!-- item-->
        <a class="link" data-toggle="tooltip" title="" data-original-title=""><i class=""></i></a>
        <!-- item-->
        <a href="{{route('user.logout')}}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                class="ti-lock"></i></a>
    </div>
</aside>