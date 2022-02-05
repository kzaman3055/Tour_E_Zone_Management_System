@extends('front.front_master')
@section('front')


<div class="privacy wow zoomIn animated animated">
    <div class="container">




        <style>
            .invoice-box {
                max-width: 800px;
                margin: auto;
                padding: 30px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                font-size: 16px;
                line-height: 24px;
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
            }

            .invoice-box table td {
                padding: 5px;
                vertical-align: top;
            }

            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }

            .invoice-box table tr.information table td {
                padding-bottom: 40px;
            }

            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
            }

            .invoice-box table tr.details td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.item td {
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }

            /** RTL **/
            .invoice-box.rtl {
                direction: rtl;
                font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            }

            .invoice-box.rtl table {
                text-align: right;
            }

            .invoice-box.rtl table tr td:nth-child(2) {
                text-align: left;
            }
        </style>


        @php

        $userid =Auth::user()->id;
        $value = ['Pending','Confirmed'];

        $userdata= DB::table('users')->where('id',$userid)->get();
        $pendings= DB::table('bookings')->where('user_id',$userid)->where(function($query) {
        $query->Where('status', 'Pending')
        ->orWhere('status', 'Confirmed');

        })->count();



        @endphp







        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">My Panding Booking</h3>

        @if($pendings>=1)

        @foreach ($alldata as $key => $data)

        @foreach ($userdata as $udata)





        <body>
            <div class="invoice-box wow fadeInDown animated animated">
                <table cellpadding="0" cellspacing="0">
                    <tr class="top">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td class="title">
                                        <h1>Booking invoice
                                        </h1>
                                    </td>

                                    <td>
                                        Booking ID#: {{$data->id}}<br />
                                        Booking Date:{{Carbon\Carbon::parse($data->created_at)->format('d/m/Y')}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="information">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td>
                                        Address:<br />
                                        {{$udata->address}}
                                    </td>

                                    <td>
                                        Name: {{$udata->name}}
                                        <br />
                                        Contact: {{$udata->contact}}
                                        <br />
                                        Email: {{$udata->email}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>




                    <tr class="heading">
                        <td>Details</td>

                        <td></td>
                    </tr>

                    <tr class="item">
                        <td>Package Name</td>

                        <td>{{$data->package_name}}</td>
                    </tr>
                    <tr class="item">
                        <td>Package Type</td>

                        <td>{{$data->package_type}}</td>
                    </tr>
                    <tr class="item">
                        <td>Price</td>

                        <td>{{$data->package_price}} TK</td>
                    </tr>
                    <tr class="item">
                        <td>From</td>

                        <td>{{Carbon\Carbon::parse($data->fromdate)->format(' d M Y ')}}</td>
                    </tr>
                    @if($data->status=='Confirmed')

                    <tr class="item">
                        <td>To</td>

                        <td>{{Carbon\Carbon::parse($data->todate)->format(' d M Y')}}</td>
                    </tr>
@endif
                    <tr class="item">
                        <td>Status</td>

                        <td>{{$data->status}}</td>
                    </tr>

                    
                    <tr class="total">
                        <td></td>
@if($data->status=='Confirmed')
                        <td><a href="{{route('pendingbooking.cancel',$data->id)}}" class="btn btn-danger btn-flat mb-5"
                                id="delete">Cancel</a> 
                                
                                <a href="{{route('pay.now',$data->id)}}"
                                    class="btn btn-success btn-flat mb-5">Pay Now</a>
                                
                            </td>   
                        </tr>

                        <tr class="item last">
<td></td>
                        <td>

                            <p style="color: red">You can pay online and offline both. After paying Online please check  Booking History
                            </p>
                            </td>
</tr>

     
@else

                            <td>
                                
                                <a href="{{route('pendingbooking.cancel',$data->id)}}" class="btn btn-danger btn-flat mb-5"
                                    id="delete">Cancel</a> 
                        </td>
                    </tr>
<tr>
    <td></td>
<td>

<p style="color: red">Note: Please, Wait until admin "Confiremd" your booking.
</p>
</td>

</tr>

@endif







                </table>

            </div>




        </body>











<br>







        @endforeach








        @endforeach






        @else



        <label class="inputLabel wow fadeInDown animated animated">There is no Booking pending. Please book a package first.</label>





        @endif



    </div>


</div>


@endsection