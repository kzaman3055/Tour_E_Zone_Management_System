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
                    <h4 class="box-title">Add Admin</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('admin.store')}}">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="true">

                                            </div>
                                        </div>
                                

                                        <div class="form-group">
                                            <h5>Email <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required="true">

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="hidden" name="is_admin" value="1" class="form-control" required="true">

                                            </div>
                                        </div>


                                    </div>


                                    <div class="col-md-6">




                                     
                                        <div class="form-group">
                                            <h5>New Password <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="password" required autocomplete="new_password" class="form-control" required="true">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Confirm Password <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="password_confirmation" required autocomplete="new_password" class="form-control" required="true">

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