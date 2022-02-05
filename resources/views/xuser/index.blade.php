@extends('user.user_master')
@section('user')

@php
    
    $user =Auth::user();
    $userid =Auth::user()->id;

    $totalsale = DB::table('sales')->where('user_id',$userid)->where('payment_status','Paid')->get();
    $total=0;
    foreach ($totalsale as $data){
    
        $quant= $data->quantity;
        $sum = 0;
        $total += $quant + $sum;
    }


    $totalcost = DB::table('sales')->where('user_id',$userid)->where('payment_status','Pending')->count();


@endphp






    <div class="content-wrapper">
        <div class="container-full">


            


            <section class="content">
                <div class="row">
        
                  <div class="col-12">
        
        
        
              <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
                              <div class="flexbox px-20 pt-20">
                                <label class="toggler toggler-danger text-white">
                                  <input type="checkbox">
                                </label>
                                <a href="{{route('userprofile.edit')}}" style="float: right"
                                            class="btn btn-rounded btn-success mb-5 ">Edit Profile </a>
                              </div>
        
                              <div class="box-body text-center pb-50">
                                <a href="#">
                                  <img class="avatar avatar-xxl avatar-bordered" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg') }}"alt="User Avatar"  style =" width: 100px; height: 100px; border: 3px solid white;" >
                                </a>
                                <h4 class="mt-2 mb-0"><a class="hover-primary text-white" >{{$user->name}}</a></h4>
                                <span><i class="fa fa-envelope w-20"></i> {{$user->email}}</span>
                              </div>
        
                              <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
                                <li>
                                  <span class="opacity-60">Address</span><i class="fa fa-map-marker w-20"></i><br>
                                  <span class="font-size-20">{{$user->address}}</span>
                                </li>
                                <li>
                                  <span class="opacity-60">Contact</span><i class="fa fa-mobile w-20"></i><br>
                                  <span class="font-size-20">{{$user->contact}}</span>
                                </li>
                                <li>
                                  <span class="opacity-60">NID</span><i class="fa fa-address-card-o w-20"></i><br>
                                  <span class="font-size-20">{{$user->nid}}</span>
                                </li>
                              </ul>
                            </div>			
              <!-- /.content -->
            








            <div class="row">
              <div class="col-xl-6 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-webpack"></i>
                          </div>
                          <div>
                              <p class="text-white mt-20 mb-0 font-size-20">Total Package Buyed: {{$total}}</p>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-xl-6 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-restore"></i>
                          </div>
                          <div>
                              <p class="text-white mt-20 mb-0 font-size-20">Total Pending Order: {{$totalcost}}</p>
                          </div>
                      </div>
                  </div>
              </div>



            </div>

            </div>






        </div>





            

                    
                          
            <!-- /.content -->
        </div>
    </div>
@endsection
