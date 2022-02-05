@extends('user.user_master')
@section('user')




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

                  

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Package Name</th>
                                            <th>Place</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Transport</th>
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
                                            <td>
                                                <a href="{{route('userbuy.add',$packages->id)}}" class="btn btn-success btn-flat mb-5">Buy</a>
                                     
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