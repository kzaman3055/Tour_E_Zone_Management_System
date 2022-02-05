@extends('admin.admin_master')
@section('admin')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update Booking Status</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('booking.update',$editData->id)}}">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <h5>Package Name </h5>
                                            <div class="controls">
                                                <input  style="border: 0;" class="form-control" disabled
                                                  value="{{$editData->package_name}}">
                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>Package Type </h5>
                                            <div class="controls">
                                                <input  style="border: 0;" class="form-control" disabled
                                                  value="{{$editData->package_type}}">
                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Form </h5>
                                            <div class="controls">
                                                <input  style="border: 0;" class="form-control" disabled
                                                  value="{{ Carbon\Carbon::parse ($editData->fromdate) ->format (' d-M-Y' ) }}">
                                            
                                            </div>
                                        </div>






                                        <div class="form-group">
                                            <h5>To </h5>
                                            <div class="controls">
                                                <input type="date"  value="{{$editData->todate}}" name="todate" class="form-control">
                                            </div>
                                        </div>











                                        <div class="form-group">
                                            <h5>Admin Comment <span class="text-danger">*</span></h5>

                                            <textarea rows="8" cols="5" name="admin_commnet" class="form-control"
                                                required='true'>{{$editData->admin_comment}}</textarea>
                                        </div>






                                    </div>


                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <h5>Status<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="status" class="form-control" required="true"
                                                    aria-invalid="false">

                                                    <option value="" selected="" disabled="">Select Status</option>

                                                    <option value="Pending" {{($editData->status== "Pending"
                                                        ?"selected":"")}} >Pending</option>
                                                    <option value="Confirmed" {{($editData->status== "Confirmed"
                                                        ?"selected":"")}} >Confirmed</option>
                                                                <option value="Paid" {{($editData->status== "Paid"
                                                                    ?"selected":"")}} >Paid</option>
                                                    <option value="Cancelled" {{($editData->status== "Cancelled"
                                                        ?"selected":"")}} >Cancelled</option>






                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <h5>Payment Method</h5>
                                            <div class="controls">
                                                <select name="Payment_type" class="form-control" 
                                                    aria-invalid="false">

                                                    <option value="" selected="" disabled="">Select Method</option>

                                                    <option value="Cash" {{($editData->status== "Cash"
                                                        ?"selected":"")}} >Cash</option>
                                               
                                                      
                                                    <option value="Other" {{($editData->status== "Other"
                                                        ?"selected":"")}} >Other</option>






                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Transaction_ID </h5>
                                            <div class="controls">
                                                <input type="text" name="transaction_id" class="form-control"
                                                  value="{{$editData->transaction_id}}">
                                            
                                            </div>
                                        </div>






                                        <div class="text-xs-right">
                                            <input type="submit" value="Update" style="float: right"
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