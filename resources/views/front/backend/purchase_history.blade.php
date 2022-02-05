@extends('front.front_master')
@section('front')


<div class="privacy wow zoomIn animated animated">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Package Booking History</h3>

            <script>
                function printDiv(divName){
                    var printContents = document.getElementById(divName).innerHTML;
                    var originalContents = document.body.innerHTML;
        
                    document.body.innerHTML = printContents;
        
                    window.print();
        
                    document.body.innerHTML = originalContents;
        
                }
            </script>






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





        $user =Auth::user()->id;
        $value = ['Paid','Cancelled'];
        $historydata = DB::table('bookings')->where('user_id',$user)->where(function($query) {
        $query->Where('status', 'Paid')
        ->orWhere('status', 'Cancelled');

        })->count();


        $userdata= DB::table('users')->where('id',$user)->get();











        @endphp



        @if($historydata>=1)





        @foreach ($alldata as $key => $data)

        @foreach ($userdata as $udata)





        <div id='printMe'>


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
                                       Booking Date:{{Carbon\Carbon::parse($data->created_at)->format(' d M Y')}}<br/>
                                       @if ($data->status==!'Cancelled' )    

                                       Payment Date:{{Carbon\Carbon::parse($data->updated_at)->format(' d M Y')}}
@endif
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
                                        {{$data->address}}
                                    </td>

                                    <td>
                                        Name: {{$data->user_name}}
                                        <br />
                                        Contact: {{$data->user_contact}}
                                        <br />
                                        Email: {{$data->user_email}}
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
                        <td>From</td>

                        <td>{{Carbon\Carbon::parse($data->fromdate)->format('d M Y')}}</td>
                    </tr>
                    @if ($data->status!=='Cancelled' )    

                    <tr class="item">
                        <td>To</td>

                        <td>{{Carbon\Carbon::parse($data->todate)->format('d M Y')}}</td>
                    </tr>
                    @endif
                    <tr class="item">
                        <td>Package Price</td>

                        <td>{{$data->package_price}} TK</td>
                    </tr>
                 
                    <tr class="item">
                        <td>Status</td>

                        <td>{{$data->status}}</td>
                    </tr>




                    @if ($data->status!=='Cancelled' )    


                    <tr class="item">
                        <td>Payment Method</td>

                        <td>{{$data->Payment_type}}</td>
                    </tr>

@endif

                    @if($data->Payment_type=='Cards/ Moblie Banking/ Net Banking'
                    )
                    <tr class="item">

                        <td>Transaction ID</td>

                        <td>{{$data->transaction_id}}</td>
                    </tr>
@endif







@if ($data->status!=='Cancelled' )    







<tr class="total">
    <td>Payment Amount</td>

    <td>{{$data->amount}} TK</td>
</tr>

@endif






    @if ($data->status=='Cancelled' )    
      

<tr class="item">

    <td>Admin Comment:</td>

    <td> {{$data->admin_comment}}</td>
</tr>
@endif


                    
                </table>

            </div>




        </body>
    </div>

        <br>



















        @endforeach

        @endforeach

        </tbody>

        </table>


        @else


        <label class="inputLabel wow fadeInDown animated animated"> You didn't book any packages yet. Please book a
            package first.</label>





        @endif

    </div>
</div>


@endsection