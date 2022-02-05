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
                        <h4 class="box-title">Change Password</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{route('userpassword.update')}}">
                                   @csrf
                                            <div class="row">



                                                <div class="col-md-6">



                                                    <div class="form-group">
                                                        <h5>Old Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" id="current_password"  name="current_password" class="form-control"
                                                                required="true">

                                                                @error('current_password')
                                                                <span class="text-danger">{{$message}} </span>
                                                                @enderror
                                                        
                                                        </div>
                                                    </div>
                                               
                                                    <div class="form-group">
                                                        <h5> Confirm Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                                                required="true">

                                                                @error('password_confirmation')
                                                                <span class="text-danger">{{$message}} </span>
                                                                @enderror
                                                        


                                                        </div>
                                                    </div>




                                              




                                                </div>


                                                <div class="col-md-6">




                                                    <div class="form-group">
                                                        <h5> New Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" id="password" name="password" class="form-control"
                                                                required="true">


                                                                @error('password')
                                                                <span class="text-danger">{{$message}} </span>
                                                                @enderror
                                                        


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
