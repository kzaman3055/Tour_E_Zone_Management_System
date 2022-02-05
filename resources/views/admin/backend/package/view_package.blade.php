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
                            <h3 class="box-title">Package List</h3>

                            <a href="{{ route('package.add') }}" style="float: right"
                                class="btn btn-rounded btn-success mb-5 ">Add Package </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Place</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Transport</th>
                                            <th>Feature</th>
                                            <th>Detail</th>
                                            <th>Availability</th>

                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $packages)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $packages->name }}</td>
                                            <td>{{ $packages->place }}</td>
                                            <td>{{ $packages->type }}</td>
                                            <td>{{ $packages->price }}</td>
                                            <td>{{ $packages->transport }}</td>
                                            <td>{{ $packages->feature }}</td>
                                            <td>{{ $packages->detail }}</td>
                                            <td>{{ $packages->availability }}</td>

                                         
                                        
                                            <td>
                                                <a href="{{route('package.edit',$packages->id)}}"
                                                    class="btn btn-info btn-flat mb-5">Edit</a>
                                                <a href="{{route('package.delete',$packages->id)}}"
                                                    class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
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