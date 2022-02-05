@extends('admin.admin_master')
@section('admin')

@php
$totalclient= DB::table('users')->where('is_admin', '0')->count();
$totaltransports= DB::table('transports')->where('availability', 'Available')->count();
$totalresorts= DB::table('resorts')->count();
$totalrestaurants= DB::table('restaurants')->count();
$allsales=DB::table('bookings')->where('created_at', '>=', Carbon\Carbon::today())->get();
$totalbooking= DB::table('bookings')->count();

$pending= DB::table('bookings')->where('status', 'Pending')->count();




@endphp






<div class="content-wrapper">
    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-primary-light rounded w-60 h-60">
                                <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Total Client</p>
                                <h4 class="text-white mb-0 font-weight-500">{{$totalclient}} </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-warning-light rounded w-60 h-60">
                                <i class="text-info mr-0 font-size-24 mdi mdi-car"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Vehicle Available</p>
                                <h4 class="text-white mb-0 font-weight-500"> {{$totaltransports}} </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-info-light rounded w-60 h-60">
                                <i class="text-info mr-0 font-size-24 mdi mdi-home-modern"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Total Resorts</p>
                                <h4 class="text-white mb-0 font-weight-500"> {{$totalresorts}} </h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-secondary-light rounded w-60 h-60">
                                <i class="text-black mr-0 font-size-24 mdi mdi-home-variant"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Total Resturent</p>
                                <h4 class="text-white mb-0 font-weight-500"> {{$totalrestaurants}} </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-primary-light rounded w-60 h-60">
                                <i class="text-black mr-0 font-size-24 mdi mdi-sale"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Total Booking</p>
                                <h4 class="text-white mb-0 font-weight-500"> {{$totalbooking}}</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-warning-light rounded w-60 h-60">
                                <i class="text-black mr-0 font-size-24 mdi mdi-sale"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Booking Pending</p>
                                <h4 class="text-white mb-0 font-weight-500"> {{$pending}} </h4>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title align-items-start flex-column">
                                Daily Booking Log
                            </h4>
                        </div>




                        <div class="box">

                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 100px"><span class="text-white">Client Name</span>
                                                </th>
                                                <th style="min-width: 100px"><span class="text-white">Contact</span>
                                                </th>
                                                <th style="min-width: 100px"><span class="text-white">Package
                                                        Name</span></th>
                                                <th style="min-width: 100px"><span class="text-white">Price</span></th>

                                                <th style="min-width: 100px"><span class="text-white">From Date</span>
                                                </th>
                                                <th style="min-width: 100px"><span class="text-white">To Date</span>
                                                </th>
                                                <th style="min-width: 100px"><span class="text-white">Booking
                                                        Date</span>
                                                </th>


                                                <th style="min-width: 100x"><span class="text-white">Status</span></th>
                                                <th style="min-width: 100x"><span class="text-white">Payment Type</span>
                                                </th>
                                                <th style="min-width: 100x"><span class="text-white">Transaction
                                                        ID</span></th>

                                                </th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($allsales as $sale)

                                            <tr>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{$sale->user_name}}

                                                    </span>

                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{$sale->user_contact}}

                                                    </span>

                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{$sale->package_name}}

                                                    </span>

                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{$sale->package_price}} TK
                                                    </span>

                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">

                                                        {{ Carbon\Carbon::parse ($sale->fromdate) ->format (' d M Y' )
                                                        }}
                                                    </span>

                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{ Carbon\Carbon::parse ($sale->todate) ->format (' d M Y' )
                                                        }}

                                                    </span>

                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{ Carbon\Carbon::parse ($sale->todate) ->format (' g:i A d M Y'
                                                        )
                                                        }}

                                                    </span>

                                                </td>



                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{$sale->status}}

                                                    </span>

                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{$sale->Payment_type}}

                                                    </span>

                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{$sale->transaction_id}}

                                                    </span>

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
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection