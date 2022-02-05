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
                            <h3 class="box-title">Resort List</h3>

                            <a href="{{ route('resort.add') }}" style="float: right"
                                class="btn btn-rounded btn-success mb-5 ">Add Resort </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Resort Name</th>
                                            <th>Place</th>
                                            <th>Contact</th>
                                          
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $resorts)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $resorts->name }}</td>
                                            <td>{{ $resorts->place }}</td>
                                            <td>{{ $resorts->contact }}</td>

                                            <td>
                                                <a href="{{route('resortroom.add',$resorts->id)}}" class="btn btn-info btn-flat mb-5">Add Rooms</a>
                                                <a href="{{route('resortroom.details',$resorts->id)}}" class="btn btn-info btn-flat mb-5">Rooms Details</a>


                                                <a href="{{route('resort.edit',$resorts->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>

                                                <a href="{{route('resort.delete',$resorts->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
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