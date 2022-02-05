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
                            <h3 class="box-title">Transport Category List</h3>

                            <a href="{{ route('transportcategory.add') }}" style="float: right"
                                class="btn btn-rounded btn-success mb-5 ">Add Transport Category </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Transport Type Name</th>
                                           
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $transport_categories)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $transport_categories->name }}</td>
                                          
                                            <td>
                                                <a href="{{route('transportcategory.edit',$transport_categories->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>
                                                <a href="{{route('transportcategory.delete',$transport_categories->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
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