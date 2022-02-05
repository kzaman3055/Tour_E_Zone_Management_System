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
                            <h3 class="box-title">Package Type List</h3>

                            <a href="{{ route('packagetype.add') }}" style="float: right"
                                class="btn btn-rounded btn-success mb-5 ">Add Package Type </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Package Type Name</th>
                                           
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $package_types)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $package_types->name }}</td>
                                          
                                            <td>
                                                <a href="{{route('packagetype.edit',$package_types->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>
                                                <a href="{{route('packagetype.delete',$package_types->id)}}"class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
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