@php

$prefix = Request::route()->getprefix();
$route = Route::current()->getName();



@endphp





<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{route('home')}}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- <img src="{{ asset('backend/images/logo-dark.png') }}" alt=""> -->
                        <h3>Welcome to TMS</h3>






                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>

                <a href="{{route('admin.home')}}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>



            <li class="treeview {{($prefix=='/admin')?'active':''}}">
                <a href="#">
                    <i data-feather="user"></i>
                    <span>View Admin / User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.view')}}"><i class="ti-more"></i>View Admin</a></li>
                    <li><a href="{{route('user.view')}}"><i class="ti-more"></i>View User</a></li>

                    <li><a href="{{route('admin.add')}}"><i class="ti-more"></i>Add New Admin</a></li>


                </ul>
            </li>

            <li class="treeview {{($prefix=='/sale')?'active':''}}">
                <a href="#">
                    <i data-feather="activity"></i>
                    <span>Manage Booking</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{route('booking.view')}}"><i class="ti-more"></i>View Bookings</a></li>
                </ul>
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

                    <li><a href="{{route('package.view')}}"><i class="ti-more"></i>View Package</a></li>
                    <li><a href="{{ route('package.add') }}"><i class="ti-more"></i>Add Package</a></li>
                    <li><a href="{{ route('packagetype.view') }}"><i class="ti-more"></i>Manage Package Type</a></li>





                </ul>
            </li>




            <li class="treeview {{($prefix=='/transport')?'active':''}} && {{($prefix=='/transporttype')?'active':''}} && {{($prefix=='/transportcategory')?'active':''}}">
                <a href="#">
                    <i data-feather="truck"></i>
                    <span>Manage Transport</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

              
                    <li><a href="{{route('transport.view')}}"><i class="ti-more"></i>View Transport</a></li>
                    <li><a href="{{route('transport.add')}}"><i class="ti-more"></i>Add Transport</a></li>
                    <li><a href="{{route('transporttype.view')}}"><i class="ti-more"></i>Transport Type</a></li>
                    <li><a href="{{route('transportcategory.view')}}"><i class="ti-more"></i>Transport Category</a></li>





                </ul>
            </li>

            <li class="treeview {{($prefix=='/restaurant')?'active':''}}">
                <a href="#">
                    <i data-feather="home"></i>
                    <span>Manage Restaurant</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{route('restaurant.view')}}"><i class="ti-more"></i>View Restaurant</a></li>
                    <li><a href="{{route('restaurant.add')}}"><i class="ti-more"></i>Add Restaurant</a></li>


                </ul>
            </li>

            <li class="treeview {{($prefix=='/resort')?'active':''}} && {{($prefix=='/roomtype')?'active':''}}">
                <a href="#">
                    <i data-feather="home"></i>
                    <span>Manage Resort</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('resort.view')}}"><i class="ti-more"></i>View Resort</a></li>
                    <li><a href="{{ route('resort.add') }}"><i class="ti-more"></i>Add Resort</a></li>
                    <li><a href="{{route('roomtype.view')}}"><i class="ti-more"></i>Room Type</a></li>


                </ul>
            </li>

            <li class="treeview {{($prefix=='/destination')?'active':''}}">
                <a href="#">
                    <i data-feather="map-pin"></i>
                    <span>Manage Destination</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('destination.view')}}"><i class="ti-more"></i>View Destination</a></li>
                    <li><a href="{{route('destination.add')}}"><i class="ti-more"></i>Add Destination</a></li>

                </ul>
            </li>


            <li class="treeview ">
                <a href="#">
                    <i data-feather="paperclip"></i>
                    <span>Info and Inquriy</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('pageinfo.edit')}}"><i class="ti-more"></i>Edit Page Info</a></li>
                    <li><a href="{{route('inquiry.view')}}"><i class="ti-more"></i>View Inquiry</a></li>


                </ul>
            </li>











        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a class="link" data-toggle="tooltip" title="" data-original-title=""><i class=""></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                class="ti-lock"></i></a>
    </div>
</aside>