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
                            <h3 class="box-title">Rooms Data</h3>

                            <a href="{{ route('resort.view') }}" style="float: right"
                                class="btn btn-rounded btn-success mb-5 ">All Resort Details </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
										<tr>
                                            <th>SL</th>

                                             <th>Room Type</th>
                                             <th>Total Room</th>
                                             <th>Feature</th>

                                            <th>B2B Price</th>
                                            <th>B2C Price</th>


                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $value)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->roomtype_name }}</td>

                                            <td>{{ $value->totalroomno }}</td>
                                            <td>{{ $value->feature }}</td>

                                            
                                            <td>{{ $value->B2B }}</td>

                                            <td>{{ $value->B2C }}</td>


                                            <td>
                                               
                                                <a href="{{route('resortroom.edit',$value->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>

                                                <a href="{{route('resortroom.delete',$value->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>

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