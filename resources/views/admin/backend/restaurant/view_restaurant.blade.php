@extends('admin.admin_master')
@section('admin')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">



                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Restaurants List</h3>

                            <a href="{{ route('restaurant.add') }}" style="float: right"
                                class="btn btn-rounded btn-success mb-5 ">Add Restaurants </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Restaurants Name</th>
                                            <th>Place</th>
                                            <th>Contact</th>
                                            <th>Total Seat</th>
                                            <th>Breakfast</th>
                                            <th>Launch</th>
                                            <th>Dinner</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>




                                    <tbody>
                                        @foreach ($alldata as $key => $restaurants)


                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $restaurants->name }}</td>
                                            <td>{{ $restaurants->place }}</td>
                                            <td>{{ $restaurants->contact }}</td>

                                            <td>{{ $restaurants->seats }}</td>
                                            <td>{{ Carbon\Carbon::parse ($restaurants->breakfast) ->format (' g:i A' ) }}</td>
                                            <td>{{ Carbon\Carbon::parse ($restaurants->launch) ->format (' g:i A' ) }}</td>
                                            <td>{{ Carbon\Carbon::parse ($restaurants->dinner) ->format (' g:i A' ) }}</td>


                                          

                                          
                                            <td>
                                                <a href="{{route('restaurant.edit',$restaurants->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>
                                                <a href="{{route('restaurant.delete',$restaurants->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
                                            </td>


                                        </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->












@endsection