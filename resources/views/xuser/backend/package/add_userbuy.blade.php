@extends('user.user_master')
@section('user')




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Buy Package</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{route('userbuy.store')}}">
                                   @csrf
                                            <div class="row">



                                                <div class="col-md-6">

                                                                    
                                                    <div class="form-group">
                                                    
                                                        <div class="controls">
                                                            <input type="hidden" name="user_id" class="form-control"
                                                                value="{{$user->id}}" required="" readonly>
            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="hidden" style="border:none" name="user_name" class="form-control"
                                                                value="{{$user->name}}" required="" readonly>
            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="hidden" style="border:none" name="user_email" class="form-control"
                                                                value="{{$user->email}}" required="" readonly>
            
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="hidden" style="border:none" name="user_contact" class="form-control"
                                                                value="{{$user->name}}" required="" readonly>
            
                                                        </div>
                                                    </div>

                                                 
                                    


                                        



                                                   
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="hidden" name="package_id"  value="{{$package->id}}" class="form-control" >
            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="hidden" name="payment_status"  value="Pending" class="form-control" >
            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Package Name: {{$package->name}}</h5>
                                                        <h5>Package Name: {{$package->price}} TK</h5>

                                                        <div class="controls">
                                                            <input type="hidden" name="package_name"  value="{{$package->name}}" class="form-control" >
            
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <h5>Payment Method <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="payment_type" class="form-control" required="true"
                                                                aria-invalid="false">
                                                                <option value="" selected="" disabled="">Select Please</option>
                                                                <option value= "Cash">Cash</option>
                                                                <option value= "Cradit Card">Cradit Card</option>
                                                                <option value= "Mobile Banking">Mobile Banking</option>

                                                            </select>
                                                        </div>
                                                    </div>



                                                </div>


                                                <div class="col-md-6">




                                                   

                                                    

                                                    <div class="form-group">
                                                        <h5>Transection ID </h5>
                                                        <div class="controls">
                                                            <input type="text" name="transection_id" class="form-control" >
            
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="form-group">
                                                        <h5>Quantity <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="number"required="true" name="quantity" min="1"  class="form-control" >
            
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="text-xs-right">
                                                        <input type="submit" value="Submit" style="float: right"
                                                            class="btn btn-outline btn-rounded btn-success mb-5">
                                                    </div>

                                                </div>









                                            </div>














                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>












        </div>
    </div>
    <!-- /.content-wrapper -->












@endsection
