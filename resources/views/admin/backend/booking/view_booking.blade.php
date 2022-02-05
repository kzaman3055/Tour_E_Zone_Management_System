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
                            <h3 class="box-title">All Booking List</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Booking ID</th>
                                            <th>Client ID</th>

                                            <th>Client Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>

                                            <th>Package Name</th>
                                            <th>Type</th>

                                            <th>price</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Booking Time</th>
                                            <th>User Comment</th>
                                            <th>Payment Type</th>
                                            <th>Transaction ID</th>
                                            <th>Status</th>


                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $booking)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $booking->id }}</td>
                                            <td>{{ $booking->user_id }}</td>


                                            <td>{{ $booking->user_name }}</td>
                                            <td>{{ $booking->user_contact }}</td>
                                            <td>{{ $booking->user_email }}</td>

                                            <td>{{ $booking->package_name }}</td>
                                            <td>{{ $booking->package_type }}</td>

                                            <td>{{ $booking->package_price }}</td>

                                            <td>{{ Carbon\Carbon::parse ($booking->fromdate) ->format (' d-M-Y' ) }}
                                            </td>
                                            <td>{{ Carbon\Carbon::parse ($booking->todate) ->format (' d-M-Y' ) }}</td>
                                            <td>{{ Carbon\Carbon::parse ($booking->created_at) ->format ('g:i A d-M-Y' )
                                                }}
                                            </td>

                                            <td>{{ $booking->user_comment }}</td>
                                            <td>{{ $booking->Payment_type }}</td>
                                            <td>{{ $booking->transaction_id }}</td>


                                            <td>{{ $booking->status }}</td>




                                            <td>
                                                <a href="{{route('booking.edit',$booking->id)}}"
                                                    class="btn btn-info btn-flat mb-5">Edit</a>

                                                <a href="{{route('booking.delete',$booking->id)}}"
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