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
                            <h3 class="box-title">Transport List</h3>

                            <a href="{{route('transport.add')}}" style="float: right" class="btn btn-rounded btn-success mb-5 ">Add Transport </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Transport Name</th>
                                            <th>Type</th>
                                            <th>Category</th>
                                            <th>Availability</th>
                                            <th>Driver Name</th>
                                            <th>Contact</th>
                                            <th>Registratin No</th>
                                            <th>Price B to B</th>
                                            <th>Price B to C</th>
                                            <th>Destination</th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $transports)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $transports->name }}</td>
                                            <td>{{ $transports->type }}</td>
                                            <td>{{ $transports->category }}</td>
                                            <td>{{ $transports->availability }}</td>
                                            <td>{{ $transports->driver_name }}</td>
                                            <td>{{ $transports->driver_contact }}</td>
                                            <td>{{ $transports->rag_no }}</td>
                                            <td>{{ $transports->price_BtoB }}</td>
                                            <td>{{ $transports->price_BtoC }}</td>

                                            <td>{{ $transports->destination }}</td>




                                            <td>
                                                <a href="{{route('transport.edit',$transports->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>
                                                <a href="{{route('transport.delete',$transports->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
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