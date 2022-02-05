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
                            <h3 class="box-title">Panding Package List</h3>

                  

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Package Name</th>
                                            <th>Price</th>
                                            <th>Payment Type</th>
                                            <th>Trensection ID</th>
                                            <th>Quantity</th>

                                            <th>Total Price</th>

                                            <th>Time</th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $data)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $data->package_name }}</td>
                                            <td>{{ $data->package_price }}</td>
                                            <td>{{ $data->payment_type }}</td>
                                            <td>{{ $data->transection_id }}</td>
                                            <td>{{ $data->quantity }}</td>

                                            <td>{{ $data->total_cost }}</td>

                                            <td>{{ Carbon\Carbon::parse ($data->created_at) ->format ('g:i A d-M-Y' ) }}</td>

                                            <td>
                                                <a href="{{route('pendingpackage.cancel',$data->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Cancel</a>
                                     
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